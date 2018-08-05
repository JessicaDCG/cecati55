<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Articuloorganizacion Controller
 *
 * @property \App\Model\Table\ArticuloorganizacionTable $Articuloorganizacion
 *
 * @method \App\Model\Entity\Articuloorganizacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticuloorganizacionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articulo', 'Estante']
        ];
        $articuloorganizacion = $this->paginate($this->Articuloorganizacion);

        $this->set(compact('articuloorganizacion'));
    }

    /**
     * View method
     *
     * @param string|null $id Articuloorganizacion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articuloorganizacion = $this->Articuloorganizacion->get($id, [
            'contain' => ['Articulo', 'Estante']
        ]);

        $this->set('articuloorganizacion', $articuloorganizacion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articuloorganizacion = $this->Articuloorganizacion->newEntity();
        if ($this->request->is('post')) {
            $articuloorganizacion = $this->Articuloorganizacion->patchEntity($articuloorganizacion, $this->request->getData());
            if ($this->Articuloorganizacion->save($articuloorganizacion)) {
                $this->Flash->success(__('The articuloorganizacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articuloorganizacion could not be saved. Please, try again.'));
        }
        $articulo = $this->Articuloorganizacion->Articulo->find('list', ['limit' => 200]);
        $estante = $this->Articuloorganizacion->Estante->find('list', ['limit' => 200]);
        $this->set(compact('articuloorganizacion', 'articulo', 'estante'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Articuloorganizacion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articuloorganizacion = $this->Articuloorganizacion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articuloorganizacion = $this->Articuloorganizacion->patchEntity($articuloorganizacion, $this->request->getData());
            if ($this->Articuloorganizacion->save($articuloorganizacion)) {
                $this->Flash->success(__('The articuloorganizacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articuloorganizacion could not be saved. Please, try again.'));
        }
        $articulo = $this->Articuloorganizacion->Articulo->find('list', ['limit' => 200]);
        $estante = $this->Articuloorganizacion->Estante->find('list', ['limit' => 200]);
        $this->set(compact('articuloorganizacion', 'articulo', 'estante'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Articuloorganizacion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articuloorganizacion = $this->Articuloorganizacion->get($id);
        if ($this->Articuloorganizacion->delete($articuloorganizacion)) {
            $this->Flash->success(__('The articuloorganizacion has been deleted.'));
        } else {
            $this->Flash->error(__('The articuloorganizacion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
