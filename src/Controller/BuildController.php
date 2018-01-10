<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Mailer\Email;

/**
 * Games Controller
 *
 * @property \App\Model\Table\GamesTable $Games
 *
 * @method \App\Model\Entity\Game[] paginate($object = null, array $settings = [])
 */
class BuildController extends AppController {

    var $components = array('Cookie', 'Code');

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $sesion = $this->Code->loadSesion();

        if (empty($sesion['trouble'])) {
            return $this->redirect(['action' => 'trouble']);
        }
        $this->set("teams", $this->Code->teamsOK($sesion['id']));
    }

    public function estado() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->loadModel('Games');
        $game = $this->Games->get($id);
        $teams = $this->Code->getTeamsBegin($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
          //  print_r($datos);
            
            if (isset($datos['begin'])) {
                $game->active = !$datos['begin'];
                $this->Games->save($game);
            }
            if (isset($datos['ok'])) {
                
                $this->Code->unlockTeams($id);
            }
        }
        $this->set("game", $game);
        $this->set("teams", $teams);
    }

    public function begin() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->loadModel('Games');
        $game = $this->Games->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();

            if ($datos['ok']) {
                $game->active = 1;
                if ($this->Games->save($game)) {
                    $this->Flash->success(__('La partida ha empezado.'));

                    return $this->redirect(['controller' => 'game', 'action' => 'index']);
                }
            }
        } else {
            $this->loadModel('Teams');
            $query = $this->Teams->find()
                    ->where(['game_id' => $id])
                    ->order(['team' => 'ASC']);
            $teams = [];
            foreach ($query as $row) {
                $teams[] = [$row->team, $row->name, $row->members];
            }
            $this->set('trouble', $game->trouble);
            $this->set('teams', $teams);
        }
    }

    public function trouble() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];
        $this->loadModel('Games');
        $game = $this->Games->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $game = $this->Games->patchEntity($game, $this->request->getData());
            if ($this->Games->save($game)) {
                $this->Flash->success(__('La problemática se ha guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('La problemática no se ha guardado. Inténtelo de nuevo'));
        }

        $this->set('trouble', $game->trouble);
    }

    public function teams() {
        $sesion = $this->Code->loadSesion();
        $id = $sesion['id'];

        $this->loadModel('Teams');
        $query = $this->Teams->find()
                ->where(['game_id' => $id])
                ->order(['team' => 'ASC']);
        $teams = [];
        foreach ($query as $row) {
            $teams[] = [$row->team, $row->name, $row->members, $row->id];
        }

        if ($this->request->is(['patch', 'post', 'put'])) {
            $datos = $this->request->getData();
            if (isset($datos['ids'])) {
                $this->Teams->deleteAll(['game_id' => $id, 'id NOT IN' => $datos['ids']]);
            }
            $datos['names'] = unserialize($datos['names']);
            print_r($datos);
            for ($i = 0; $i < count($datos['name']); $i++) {
                echo "#" . $i;
                if (isset($datos['name'][$i]) && !empty($datos['members'][$i])) {
                    if (isset($datos['ids'][$i]) && !empty($datos['ids'][$i])) {
                        $team = $this->Teams->get($datos['ids'][$i]);
                    } else {
                        $team = $this->Teams->newEntity();
                        $team->game_id = $id;
                    }
                    $team->team = $i + 1;

                    $team->name = $datos['names'][$datos['name'][$i]];
                    $team->img=$datos['name'][$i]+1;
                    $team->members = $datos['members'][$i];
                    $team->bikles = 20;

                    if (!$this->Teams->save($team)) {
                        $this->Flash->error(__('Algún equipo no se ha guardado. Inténtelo de nuevo'));
                    }
                }
            }
            $this->Flash->success(__('Los equipos se han guardado.'));

            return $this->redirect(['action' => 'index']);
        }

        $this->set('teams', $teams);
        $this->set('names', $this->Code->getNames());
    }

    public function reset() {
        $this->Cookie->delete('code');
        $this->Cookie->delete('id');
        $this->Cookie->delete('admin');
        $this->Cookie->delete('team');
        $this->Cookie->delete('active');
        $this->Cookie->delete('name');
        $this->request->session()->destroy();
        return $this->redirect('/');
    }

    public function create() {
        $datos = $this->request->query;
        $codes = [];
        if (!empty($datos['code']) && !empty($datos['name'])) {
            $codes = $this->Code->createGame($datos['name']);
        }
        $this->set('codes', $codes);
    }
    
     public function resetgame() {
        $datos = $this->request->query;
        $codes = [];
        if (!empty($datos['code']) && $datos['code']=='nuclearWeapon') {
            $codes = $this->Code->resetGame();
        }
        $this->set('codes', $codes);
    }

}
