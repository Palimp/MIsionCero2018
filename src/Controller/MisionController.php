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
class MisionController extends AppController {

    var $components = array('Cookie', 'Code');

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function sendmail() {

        $email = new Email();
        $email->profile('default');
        $email->emailFormat('html')->template('contact');
        $email->from('misioncero1@gmail.com', "Mision Cero")->to('misioncero1@gmail.com', "Mision Cero");
        $email->viewVars($this->request->data);
        $a = $email->subject('Contacto')->send();
        $this->set('nombre', $this->Cookie->read('name'));
    }

    public function codelogin() {
        $code = $this->request->data['code'];
        $reg = $this->Code->checkCode($code);

        if ($reg == 0) {
            $this->set('error', __("El código no es válido"));
            $this->viewBuilder()->template('error');
            return;
        }
        if ($reg == 2 || $reg == 4) {
            $this->set('error', __("El código ha caducado"));
            $this->viewBuilder()->template('error');
            return;
        }
        if ($reg == 1) {
            $session = $this->request->session();
            $session->write('code', $code);
            $session->write('admin', 1);
            $session->write('id', $this->Code->getCodeId($code));
            $this->Cookie->write('code', $code);
            $this->Cookie->write('admin', 1);
            $this->Cookie->write('id', $this->Code->getCodeId($code));
            $sesion = $this->Code->loadSesion();
            if ($sesion['active']) {
                return $this->redirect(['controller' => 'Game', 'action' => 'index']);
            } else {
                return $this->redirect(['controller' => 'Build', 'action' => 'index']);
            }
        }
        if ($reg == 3) {
            $session = $this->request->session();
            $session->write('code', $code);
            $session->write('admin', 0);
            $session->write('id', $this->Code->getCodeId($code));
            $this->Cookie->write('code', $code);
            $this->Cookie->write('admin', 0);
            $this->Cookie->write('id', $this->Code->getCodeId($code));
            return $this->redirect(
                            ['controller' => 'Game', 'action' => 'index']
            );
        }
        $this->set('error', __("Ha ocurrido un error"));
        $this->viewBuilder()->template('error');
    }

}
