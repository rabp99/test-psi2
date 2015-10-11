<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alumnos Controller
 *
 * @property \App\Model\Table\AlumnosTable $Alumnos
 */
class AlumnosController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->layout = "main";
        $this->set('alumnos', $this->paginate($this->Alumnos->find("all")
            ->where(['Alumnos.estado' => 1])
        ));
        $this->set('_serialize', ['alumnos']);
    }
    
    /**
     * View method
     *
     * @param string|null $id Alumno id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $this->layout = "main";
        $alumno = $this->Alumnos->get($id);
        $this->set('alumno', $alumno);
        $this->set('_serialize', ['alumno']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $this->layout = "main";
        $alumno = $this->Alumnos->newEntity();
        if ($this->request->is('post')) {
            $alumno = $this->Alumnos->patchEntity($alumno, $this->request->data);
            if ($this->Alumnos->save($alumno)) {
                $this->Flash->success(__("El alumno ha sido registrado correctamente."));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El alumno no pudo ser registrado. Por favor, inténtalo nuevamente.'));
            }
        }
        $this->set(compact('alumno'));
        $this->set('_serialize', ['alumno']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumno id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $this->layout = "main";
        $alumno = $this->Alumnos->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumno = $this->Alumnos->patchEntity($alumno, $this->request->data);
            if ($this->Alumnos->save($alumno)) {
                $this->Flash->success(__('El alumno ha sido registrado correctamente.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El alumno no pudo ser registrado. Por favor, inténtalo nuevamente.'));
            }
        }
        $this->set(compact('alumno'));
        $this->set('_serialize', ['alumno']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumno id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $alumno = $this->Alumnos->get($id);
        $alumno->estado = 2;
        if ($this->Alumnos->save($alumno)) {
            $this->Flash->success(__('El alumno ha sido deshabilitado.'));
        } else {
            $this->Flash->error(__('El alumno no pudo ser deshabilitado. Por favor, inténtalo nuevamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
