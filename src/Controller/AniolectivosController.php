<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Aniolectivos Controller
 *
 * @property \App\Model\Table\AniolectivosTable $Aniolectivos
 */
class AniolectivosController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public $paginate = [
        "limit" => 10,
        "order" => [
            "Aniolectivos.descripcion" => "desc"
        ],
        "conditions" => [
            "Aniolectivos.estado" => 1
        ]
    ];
        
    public function index() {
        $this->layout = "main";
        $this->set('aniolectivos', $this->paginate());
        $this->set('_serialize', ['aniolectivos']);
    }

    /**
     * View method
     *
     * @param string|null $id Aniolectivo id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $this->layout = "main";
        $aniolectivo = $this->Aniolectivos->get($id);
        $this->set('aniolectivo', $aniolectivo);
        $this->set('_serialize', ['aniolectivo']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $this->layout = "main";
        $aniolectivo = $this->Aniolectivos->newEntity();
        if ($this->request->is('post')) {
            $aniolectivo = $this->Aniolectivos->patchEntity($aniolectivo, $this->request->data);
            if ($this->Aniolectivos->save($aniolectivo)) {
                $this->Flash->success(__('El Año Lectivo ha sido registrado correctamente.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El Año Lectivo no pudo ser registrado. Por favor, inténtalo nuevamente.'));
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
    public function edit($id = null) {
        $this->layout = "main";
        $aniolectivo = $this->Aniolectivos->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aniolectivo = $this->Aniolectivos->patchEntity($aniolectivo, $this->request->data);
            if ($this->Aniolectivos->save($aniolectivo)) {
                $this->Flash->success(__('El Año Lectivo ha sido registrado correctamente.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El Año Lectivo no pudo ser registrado. Por favor, inténtalo nuevamente.'));
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
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $aniolectivo = $this->Aniolectivos->get($id);
        $aniolectivo->estado = 2;
        if ($this->Aniolectivos->save($aniolectivo)) {
            $this->Flash->success(__('El Año Lectivo ha sido deshabilitado.'));
        } else {
            $this->Flash->error(__('El Año Lectivo no pudo ser deshabilitado. Por favor, inténtalo nuevamente.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
