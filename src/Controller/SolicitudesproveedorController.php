<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Solicitudesproveedor Controller
 *
 * @property \App\Model\Table\SolicitudesproveedorTable $Solicitudesproveedor
 *
 * @method \App\Model\Entity\Solicitudesproveedor[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SolicitudesproveedorController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articulo', 'Proveedor']
        ];
        $solicitudesproveedor = $this->paginate($this->Solicitudesproveedor);

        $this->set(compact('solicitudesproveedor'));
    }

    /**
     * View method
     *
     * @param string|null $id Solicitudesproveedor id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitudesproveedor = $this->Solicitudesproveedor->get($id, [
            'contain' => ['Articulo', 'Proveedor']
        ]);

        $this->set('solicitudesproveedor', $solicitudesproveedor);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitudesproveedor = $this->Solicitudesproveedor->newEntity();
        if ($this->request->is('post')) {
            $solicitudesproveedor = $this->Solicitudesproveedor->patchEntity($solicitudesproveedor, $this->request->getData());
            if ($this->Solicitudesproveedor->save($solicitudesproveedor)) {
                $this->Flash->success(__('The solicitudesproveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitudesproveedor could not be saved. Please, try again.'));
        }
        $articulo = $this->Solicitudesproveedor->Articulo->find('list', ['limit' => 200]);
        $proveedor = $this->Solicitudesproveedor->Proveedor->find('list', ['limit' => 200]);
        $this->set(compact('solicitudesproveedor', 'articulo', 'proveedor'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitudesproveedor id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitudesproveedor = $this->Solicitudesproveedor->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitudesproveedor = $this->Solicitudesproveedor->patchEntity($solicitudesproveedor, $this->request->getData());
            if ($this->Solicitudesproveedor->save($solicitudesproveedor)) {
                $this->Flash->success(__('The solicitudesproveedor has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitudesproveedor could not be saved. Please, try again.'));
        }
        $articulo = $this->Solicitudesproveedor->Articulo->find('list', ['limit' => 200]);
        $proveedor = $this->Solicitudesproveedor->Proveedor->find('list', ['limit' => 200]);
        $this->set(compact('solicitudesproveedor', 'articulo', 'proveedor'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitudesproveedor id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitudesproveedor = $this->Solicitudesproveedor->get($id);
        if ($this->Solicitudesproveedor->delete($solicitudesproveedor)) {
            $this->Flash->success(__('The solicitudesproveedor has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitudesproveedor could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
