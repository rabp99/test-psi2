<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aniolectivos Controller
 *
 * @property \App\Model\Table\AniolectivosTable $Aniolectivos
 */
class AniolectivosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('aniolectivos', $this->paginate($this->Aniolectivos));
        $this->set('_serialize', ['aniolectivos']);
    }

    /**
     * View method
     *
     * @param string|null $id Aniolectivo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $aniolectivo = $this->Aniolectivos->get($id, [
            'contain' => ['Matriculas']
        ]);
        $this->set('aniolectivo', $aniolectivo);
        $this->set('_serialize', ['aniolectivo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $aniolectivo = $this->Aniolectivos->newEntity();
        if ($this->request->is('post')) {
            $aniolectivo = $this->Aniolectivos->patchEntity($aniolectivo, $this->request->data);
            if ($this->Aniolectivos->save($aniolectivo)) {
                $this->Flash->success(__('The aniolectivo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aniolectivo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aniolectivo'));
        $this->set('_serialize', ['aniolectivo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Aniolectivo id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aniolectivo = $this->Aniolectivos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aniolectivo = $this->Aniolectivos->patchEntity($aniolectivo, $this->request->data);
            if ($this->Aniolectivos->save($aniolectivo)) {
                $this->Flash->success(__('The aniolectivo has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The aniolectivo could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('aniolectivo'));
        $this->set('_serialize', ['aniolectivo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Aniolectivo id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aniolectivo = $this->Aniolectivos->get($id);
        if ($this->Aniolectivos->delete($aniolectivo)) {
            $this->Flash->success(__('The aniolectivo has been deleted.'));
        } else {
            $this->Flash->error(__('The aniolectivo could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
