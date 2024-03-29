<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tests Controller
 *
 * @property \App\Model\Table\TestsTable $Tests
 */
class TestsController extends AppController {

    /**
     * Index method
     *
     * @return void
     */
    public $paginate = [
        "limit" => 10,
        "order" => [
            "Tests.nombre_prueba" => "asc"
        ],
        "conditions" => [
            "Tests.estado" => 1
        ]
    ];
    
    public function index() {
        $this->layout = "main";
        
        $this->set('tests', $this->paginate());
        $this->set('_serialize', ['tests']);
    }

    /**
     * View method
     *
     * @param string|null $id Test id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null) {
        $this->layout = "main";
        
        $test = $this->Tests->get($id, [
            'contain' => ['Tipos']
        ]);
        $this->set('test', $test);
        $this->set('_serialize', ['test']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add() {
        $this->layout = "main";
        
        $test = $this->Tests->newEntity();
        if ($this->request->is('post')) {
            $test = $this->Tests->patchEntity($test, $this->request->data);
            if ($this->Tests->save($test)) {
                $this->Flash->success(__("El Test ha sido registrado correctamente."));
                return $this->redirect(['action' => 'index']);
            } else {
                debug($test);
                $this->Flash->error(__('El Test no pudo ser registrado. Por favor, inténtalo nuevamente.'));
            }
        }
        $tipos = $this->Tests->Tipos->find("list")
            ->where(['Tipos.estado' => 1]);
        $this->set(compact('test', 'tipos'));
        $this->set('_serialize', ['test']);
    }
    
    public function prueba() {
        $this->layout = "main";
        
        $test = $this->Tests->newEntity();

        $tipos = $this->Tests->Tipos->find("list")
            ->where(['Tipos.estado' => 1]);
        $this->set(compact('test', 'tipos'));
        $this->set('_serialize', ['test']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Test id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $this->layout = "main";
        
        $test = $this->Tests->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $test = $this->Tests->patchEntity($test, $this->request->data);
            if ($this->Tests->save($test)) {
                $this->Flash->success(__("El Test ha sido registrado correctamente."));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('El Test no pudo ser registrado. Por favor, inténtalo nuevamente.'));
            }
        }
        $tipos = $this->Tests->Tipos->find('list', ['limit' => 200]);
        $this->set(compact('test', 'tipos'));
        $this->set('_serialize', ['test']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Test id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null) {
        $this->request->allowMethod(['post', 'delete']);
        $test = $this->Tests->get($id);
        if ($this->Tests->delete($test)) {
            $this->Flash->success(__('The test has been deleted.'));
        } else {
            $this->Flash->error(__('The test could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
    
    public function detalle($id = null) {
        $this->layout = "main";
        
        $test = $this->Tests->get($id, [
            'contain' => ['Tipos']
        ]);
        $this->set('test', $test);
        $this->set('_serialize', ['test']);
    }
}
