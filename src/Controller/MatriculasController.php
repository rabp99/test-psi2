<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Matriculas Controller
 *
 * @property \App\Model\Table\MatriculasTable $Matriculas
 */
class MatriculasController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public function index() {
        $this->layout = "main";
        $this->set('matriculas', $this->paginate($this->Matriculas->find("all")
            ->where(["Matriculas.estado" => 1])
            ->contain(["Alumnos", "Grados", "Aniolectivos"])
        ));
        $this->set('_serialize', ['matriculas']);
    }

    /**
     * View method
     *
     * @param string|null $id Matricula id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $this->layout = "main";
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
    public function add() {
        $this->layout = "main";
        $matricula = $this->Matriculas->newEntity();
        if ($this->request->is('post')) {
            $matricula = $this->Matriculas->patchEntity($matricula, $this->request->data);
            $matricula->alumno = $this->Matriculas->Alumnos->findById($matricula->alumno_id);
            $matricula->fecha = date("Y-m-d");
            if ($this->Matriculas->save($matricula)) {
                $this->Flash->success(__("La matrícula ha sido registrada correctamente."));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La matrícula no pudo ser registrada. Por favor, inténtalo nuevamente.'));
            }
        }
        $grados = $this->Matriculas->Grados->find("list", [
            "keyField" => "id",
            'valueField' => "descripcion"
        ]);
        $aniolectivos = $this->Matriculas->Aniolectivos->find('list', [
            "keyField" => "id",
            'valueField' => "descripcion"
        ]);
        $alumnos = $this->Matriculas->Alumnos->find("all")
            ->where(['Alumnos.estado' => 1]);
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
    public function edit($id = null) {
        $this->layout = "main";
        $matricula = $this->Matriculas->get($id, [
            'contain' => ['Alumnos']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $matricula = $this->Matriculas->patchEntity($matricula, $this->request->data);
            $matricula->alumno = $this->Matriculas->Alumnos->findById($matricula->alumno_id);
            if ($this->Matriculas->save($matricula)) {
                $this->Flash->success(__("La matrícula  ha sido registrada correctamente."));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('La matrícula no pudo ser registrada. Por favor, inténtalo nuevamente.'));
            }
        }

        $grados = $this->Matriculas->Grados->find("list", [
            "keyField" => "id",
            'valueField' => "descripcion"
        ]);
        $aniolectivos = $this->Matriculas->Aniolectivos->find('list', [
            "keyField" => "id",
            'valueField' => "descripcion"
        ]);
        $alumnos = $this->Matriculas->Alumnos->find("all")
            ->where(['Alumnos.estado' => 1]);
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
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $matricula = $this->Matriculas->get($id);
        $matricula->estado = 2;
        if ($this->Matriculas->save($matricula)) {
            $this->Flash->success(__('La matrícula ha sido deshabilitada.'));
        } else {
            $this->Flash->error(__('La matrícula no pudo ser deshabilitada. Por favor, inténtalo nuevamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
