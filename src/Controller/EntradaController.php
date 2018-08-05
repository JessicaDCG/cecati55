<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Entrada Controller
 *
 * @property \App\Model\Table\EntradaTable $Entrada
 *
 * @method \App\Model\Entity\Entrada[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EntradaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articulo', 'Tipoentrada', 'Condicion', 'Periodo']
        ];
        $entrada = $this->paginate($this->Entrada);

        $this->set(compact('entrada'));
    }

    /**
     * View method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entrada = $this->Entrada->get($id, [
            'contain' => ['Articulo', 'Tipoentrada', 'Condicion', 'Periodo']
        ]);

        $this->set('entrada', $entrada);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entrada = $this->Entrada->newEntity();
        if ($this->request->is('post')) {
            $entrada = $this->Entrada->patchEntity($entrada, $this->request->getData());
            if ($this->Entrada->save($entrada)) {
                $this->Flash->success(__('The entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entrada could not be saved. Please, try again.'));
        }
        $articulo = $this->Entrada->Articulo->find('list', ['limit' => 200]);
        $tipoentrada = $this->Entrada->Tipoentrada->find('list', ['limit' => 200]);
        $condicion = $this->Entrada->Condicion->find('list', ['limit' => 200]);
        $periodo = $this->Entrada->Periodo->find('list', ['limit' => 200]);
        $this->set(compact('entrada', 'articulo', 'tipoentrada', 'condicion', 'periodo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entrada = $this->Entrada->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entrada = $this->Entrada->patchEntity($entrada, $this->request->getData());
            if ($this->Entrada->save($entrada)) {
                $this->Flash->success(__('The entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entrada could not be saved. Please, try again.'));
        }
        $articulo = $this->Entrada->Articulo->find('list', ['limit' => 200]);
        $tipoentrada = $this->Entrada->Tipoentrada->find('list', ['limit' => 200]);
        $condicion = $this->Entrada->Condicion->find('list', ['limit' => 200]);
        $periodo = $this->Entrada->Periodo->find('list', ['limit' => 200]);
        $this->set(compact('entrada', 'articulo', 'tipoentrada', 'condicion', 'periodo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entrada = $this->Entrada->get($id);
        if ($this->Entrada->delete($entrada)) {
            $this->Flash->success(__('The entrada has been deleted.'));
        } else {
            $this->Flash->error(__('The entrada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
