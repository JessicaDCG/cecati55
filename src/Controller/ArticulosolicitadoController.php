<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Articulosolicitado Controller
 *
 * @property \App\Model\Table\ArticulosolicitadoTable $Articulosolicitado
 *
 * @method \App\Model\Entity\Articulosolicitado[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticulosolicitadoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articulo', 'Requisicion', 'Proveedor']
        ];
        $articulosolicitado = $this->paginate($this->Articulosolicitado);

        $this->set(compact('articulosolicitado'));
    }

    /**
     * View method
     *
     * @param string|null $id Articulosolicitado id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articulosolicitado = $this->Articulosolicitado->get($id, [
            'contain' => ['Articulo', 'Requisicion', 'Proveedor']
        ]);

        $this->set('articulosolicitado', $articulosolicitado);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articulosolicitado = $this->Articulosolicitado->newEntity();
        if ($this->request->is('post')) {
            $articulosolicitado = $this->Articulosolicitado->patchEntity($articulosolicitado, $this->request->getData());
            if ($this->Articulosolicitado->save($articulosolicitado)) {
                $this->Flash->success(__('The articulosolicitado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articulosolicitado could not be saved. Please, try again.'));
        }
        $articulo = $this->Articulosolicitado->Articulo->find('list', ['limit' => 200]);
        $requisicion = $this->Articulosolicitado->Requisicion->find('list', ['limit' => 200]);
        $proveedor = $this->Articulosolicitado->Proveedor->find('list', ['limit' => 200]);
        $this->set(compact('articulosolicitado', 'articulo', 'requisicion', 'proveedor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Articulosolicitado id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articulosolicitado = $this->Articulosolicitado->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articulosolicitado = $this->Articulosolicitado->patchEntity($articulosolicitado, $this->request->getData());
            if ($this->Articulosolicitado->save($articulosolicitado)) {
                $this->Flash->success(__('The articulosolicitado has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articulosolicitado could not be saved. Please, try again.'));
        }
        $articulo = $this->Articulosolicitado->Articulo->find('list', ['limit' => 200]);
        $requisicion = $this->Articulosolicitado->Requisicion->find('list', ['limit' => 200]);
        $proveedor = $this->Articulosolicitado->Proveedor->find('list', ['limit' => 200]);
        $this->set(compact('articulosolicitado', 'articulo', 'requisicion', 'proveedor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Articulosolicitado id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articulosolicitado = $this->Articulosolicitado->get($id);
        if ($this->Articulosolicitado->delete($articulosolicitado)) {
            $this->Flash->success(__('The articulosolicitado has been deleted.'));
        } else {
            $this->Flash->error(__('The articulosolicitado could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
