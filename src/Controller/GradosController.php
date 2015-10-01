<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Grados Controller
 *
 * @property \App\Model\Table\GradosTable $Grados
 */
class GradosController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('grados', $this->paginate($this->Grados));
        $this->set('_serialize', ['grados']);
    }

    /**
     * View method
     *
     * @param string|null $id Grado id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $grado = $this->Grados->get($id, [
            'contain' => ['Matriculas']
        ]);
        $this->set('grado', $grado);
        $this->set('_serialize', ['grado']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $grado = $this->Grados->newEntity();
        if ($this->request->is('post')) {
            $grado = $this->Grados->patchEntity($grado, $this->request->data);
            if ($this->Grados->save($grado)) {
                $this->Flash->success(__('The grado has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grado could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('grado'));
        $this->set('_serialize', ['grado']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Grado id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $grado = $this->Grados->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grado = $this->Grados->patchEntity($grado, $this->request->data);
            if ($this->Grados->save($grado)) {
                $this->Flash->success(__('The grado has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The grado could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('grado'));
        $this->set('_serialize', ['grado']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Grado id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $grado = $this->Grados->get($id);
        if ($this->Grados->delete($grado)) {
            $this->Flash->success(__('The grado has been deleted.'));
        } else {
            $this->Flash->error(__('The grado could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
