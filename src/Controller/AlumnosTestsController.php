<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * AlumnosTests Controller
 *
 * @property \App\Model\Table\AlumnosTestsTable $AlumnosTests
 */
class AlumnosTestsController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Alumnos', 'Tests']
        ];
        $this->set('alumnosTests', $this->paginate($this->AlumnosTests));
        $this->set('_serialize', ['alumnosTests']);
    }

    /**
     * View method
     *
     * @param string|null $id Alumnos Test id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumnosTest = $this->AlumnosTests->get($id, [
            'contain' => ['Alumnos', 'Tests']
        ]);
        $this->set('alumnosTest', $alumnosTest);
        $this->set('_serialize', ['alumnosTest']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumnosTest = $this->AlumnosTests->newEntity();
        if ($this->request->is('post')) {
            $alumnosTest = $this->AlumnosTests->patchEntity($alumnosTest, $this->request->data);
            if ($this->AlumnosTests->save($alumnosTest)) {
                $this->Flash->success(__('The alumnos test has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alumnos test could not be saved. Please, try again.'));
            }
        }
        $alumnos = $this->AlumnosTests->Alumnos->find('list', ['limit' => 200]);
        $tests = $this->AlumnosTests->Tests->find('list', ['limit' => 200]);
        $this->set(compact('alumnosTest', 'alumnos', 'tests'));
        $this->set('_serialize', ['alumnosTest']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumnos Test id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumnosTest = $this->AlumnosTests->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumnosTest = $this->AlumnosTests->patchEntity($alumnosTest, $this->request->data);
            if ($this->AlumnosTests->save($alumnosTest)) {
                $this->Flash->success(__('The alumnos test has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The alumnos test could not be saved. Please, try again.'));
            }
        }
        $alumnos = $this->AlumnosTests->Alumnos->find('list', ['limit' => 200]);
        $tests = $this->AlumnosTests->Tests->find('list', ['limit' => 200]);
        $this->set(compact('alumnosTest', 'alumnos', 'tests'));
        $this->set('_serialize', ['alumnosTest']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumnos Test id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumnosTest = $this->AlumnosTests->get($id);
        if ($this->AlumnosTests->delete($alumnosTest)) {
            $this->Flash->success(__('The alumnos test has been deleted.'));
        } else {
            $this->Flash->error(__('The alumnos test could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
