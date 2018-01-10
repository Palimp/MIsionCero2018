<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tecos Controller
 *
 * @property \App\Model\Table\TecosTable $Tecos
 *
 * @method \App\Model\Entity\Teco[] paginate($object = null, array $settings = [])
 */
class TecosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Games']
        ];
        $tecos = $this->paginate($this->Tecos);

        $this->set(compact('tecos'));
        $this->set('_serialize', ['tecos']);
    }

    /**
     * View method
     *
     * @param string|null $id Teco id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $teco = $this->Tecos->get($id, [
            'contain' => ['Games']
        ]);

        $this->set('teco', $teco);
        $this->set('_serialize', ['teco']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $teco = $this->Tecos->newEntity();
        if ($this->request->is('post')) {
            $teco = $this->Tecos->patchEntity($teco, $this->request->getData());
            if ($this->Tecos->save($teco)) {
                $this->Flash->success(__('The teco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teco could not be saved. Please, try again.'));
        }
        $games = $this->Tecos->Games->find('list', ['limit' => 200]);
        $this->set(compact('teco', 'games'));
        $this->set('_serialize', ['teco']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Teco id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $teco = $this->Tecos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $teco = $this->Tecos->patchEntity($teco, $this->request->getData());
            if ($this->Tecos->save($teco)) {
                $this->Flash->success(__('The teco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The teco could not be saved. Please, try again.'));
        }
        $games = $this->Tecos->Games->find('list', ['limit' => 200]);
        $this->set(compact('teco', 'games'));
        $this->set('_serialize', ['teco']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Teco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $teco = $this->Tecos->get($id);
        if ($this->Tecos->delete($teco)) {
            $this->Flash->success(__('The teco has been deleted.'));
        } else {
            $this->Flash->error(__('The teco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
