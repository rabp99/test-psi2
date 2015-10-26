<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Grados Controller
 *
 * @property \App\Model\Table\GradosTable $Grados
 */
class GradosController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public $paginate = [
        "limit" => 10,
        "order" => [
            "Grados.descripcion" => "desc"
        ],
        "conditions" => [
            "Grados.estado" => 1
        ]
    ];
        
    public function index() {
        $this->layout = "main";
        $this->set('grados', $this->paginate());
        $this->set('_serialize', ['grados']);
    }

    /**
     * View method
     *
     * @param string|null $id Grado id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $this->layout = "main";
        $grado = $this->Grados->get($id);
        $this->set('grado', $grado);
        $this->set('_serialize', ['grado']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $this->layout = "main";
        $grado = $this->Grados->newEntity();
        if ($this->request->is("post")) {
            $grado = $this->Grados->patchEntity($grado, $this->request->data);
            if ($this->Grados->save($grado)) {
                $this->Flash->success(__("El grado ha sido registrado correctamente."));
                return $this->redirect(["action" => "index"]);
            } else {
                $this->Flash->error(__('El grado no pudo ser registrado. Por favor, inténtalo nuevamente.'));
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
    public function edit($id = null) {
        $this->layout = "main";
        $grado = $this->Grados->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $grado = $this->Grados->patchEntity($grado, $this->request->data);
            if ($this->Grados->save($grado)) {
                $this->Flash->success(__('El grado ha sido registrado correctamente.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El grado no pudo ser registrado. Por favor, inténtalo nuevamente.'));
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
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $grado = $this->Grados->get($id);
        $grado->estado = 2;
        if ($this->Grados->save($grado)) {
            $this->Flash->success(__('El grado ha sido deshabilitado.'));
        } else {
            $this->Flash->error(__('El grado no pudo ser deshabilitado. Por favor, inténtalo nuevamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
