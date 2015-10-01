<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Matriculas Controller
 *
 * @property \App\Model\Table\MatriculasTable $Matriculas
 */
class MatriculasController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Grados', 'Aniolectivos', 'Alumnos']
        ];
        $this->set('matriculas', $this->paginate($this->Matriculas));
        $this->set('_serialize', ['matriculas']);
    }

    /**
     * View method
     *
     * @param string|null $id Matricula id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $matricula = $this->Matriculas->get($id, [
            'contain' => ['Grados', 'Aniolectivos', 'Alumnos']
        ]);
        $this->set('matricula', $matricula);
        $this->set('_serialize', ['matricula']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $matricula = $this->Matriculas->newEntity();
        if ($this->request->is('post')) {
            $matricula = $this->Matriculas->patchEntity($matricula, $this->request->data);
            if ($this->Matriculas->save($matricula)) {
                $this->Flash->success(__('The matricula has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The matricula could not be saved. Please, try again.'));
            }
        }
        $grados = $this->Matriculas->Grados->find('list', ['limit' => 200]);
        $aniolectivos = $this->Matriculas->Aniolectivos->find('list', ['limit' => 200]);
        $alumnos = $this->Matriculas->Alumnos->find('list', ['limit' => 200]);
        $this->set(compact('matricula', 'grados', 'aniolectivos', 'alumnos'));
        $this->set('_serialize', ['matricula']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Matricula id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $matricula = $this->Matriculas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matricula = $this->Matriculas->patchEntity($matricula, $this->request->data);
            if ($this->Matriculas->save($matricula)) {
                $this->Flash->success(__('The matricula has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The matricula could not be saved. Please, try again.'));
            }
        }
        $grados = $this->Matriculas->Grados->find('list', ['limit' => 200]);
        $aniolectivos = $this->Matriculas->Aniolectivos->find('list', ['limit' => 200]);
        $alumnos = $this->Matriculas->Alumnos->find('list', ['limit' => 200]);
        $this->set(compact('matricula', 'grados', 'aniolectivos', 'alumnos'));
        $this->set('_serialize', ['matricula']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Matricula id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $matricula = $this->Matriculas->get($id);
        if ($this->Matriculas->delete($matricula)) {
            $this->Flash->success(__('The matricula has been deleted.'));
        } else {
            $this->Flash->error(__('The matricula could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
