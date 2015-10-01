<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Preguntas Controller
 *
 * @property \App\Model\Table\PreguntasTable $Preguntas
 */
class PreguntasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tests']
        ];
        $this->set('preguntas', $this->paginate($this->Preguntas));
        $this->set('_serialize', ['preguntas']);
    }

    /**
     * View method
     *
     * @param string|null $id Pregunta id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pregunta = $this->Preguntas->get($id, [
            'contain' => ['Tests']
        ]);
        $this->set('pregunta', $pregunta);
        $this->set('_serialize', ['pregunta']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pregunta = $this->Preguntas->newEntity();
        if ($this->request->is('post')) {
            $pregunta = $this->Preguntas->patchEntity($pregunta, $this->request->data);
            if ($this->Preguntas->save($pregunta)) {
                $this->Flash->success(__('The pregunta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pregunta could not be saved. Please, try again.'));
            }
        }
        $tests = $this->Preguntas->Tests->find('list', ['limit' => 200]);
        $this->set(compact('pregunta', 'tests'));
        $this->set('_serialize', ['pregunta']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Pregunta id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pregunta = $this->Preguntas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pregunta = $this->Preguntas->patchEntity($pregunta, $this->request->data);
            if ($this->Preguntas->save($pregunta)) {
                $this->Flash->success(__('The pregunta has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The pregunta could not be saved. Please, try again.'));
            }
        }
        $tests = $this->Preguntas->Tests->find('list', ['limit' => 200]);
        $this->set(compact('pregunta', 'tests'));
        $this->set('_serialize', ['pregunta']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Pregunta id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pregunta = $this->Preguntas->get($id);
        if ($this->Preguntas->delete($pregunta)) {
            $this->Flash->success(__('The pregunta has been deleted.'));
        } else {
            $this->Flash->error(__('The pregunta could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
