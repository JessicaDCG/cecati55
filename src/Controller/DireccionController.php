<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Direccion Controller
 *
 * @property \App\Model\Table\DireccionTable $Direccion
 *
 * @method \App\Model\Entity\Direccion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DireccionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Municipio']
        ];
        $direccion = $this->paginate($this->Direccion);

        $this->set(compact('direccion'));
    }

    /**
     * View method
     *
     * @param string|null $id Direccion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $direccion = $this->Direccion->get($id, [
            'contain' => ['Municipio', 'Contacto']
        ]);

        $this->set('direccion', $direccion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $direccion = $this->Direccion->newEntity();
        if ($this->request->is('post')) {
            $direccion = $this->Direccion->patchEntity($direccion, $this->request->getData());
            if ($this->Direccion->save($direccion)) {
                $this->Flash->success(__('The direccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direccion could not be saved. Please, try again.'));
        }
        $municipio = $this->Direccion->Municipio->find('list', ['limit' => 200]);
        $this->set(compact('direccion', 'municipio'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Direccion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $direccion = $this->Direccion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $direccion = $this->Direccion->patchEntity($direccion, $this->request->getData());
            if ($this->Direccion->save($direccion)) {
                $this->Flash->success(__('The direccion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The direccion could not be saved. Please, try again.'));
        }
        $municipio = $this->Direccion->Municipio->find('list', ['limit' => 200]);
        $this->set(compact('direccion', 'municipio'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Direccion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $direccion = $this->Direccion->get($id);
        if ($this->Direccion->delete($direccion)) {
            $this->Flash->success(__('The direccion has been deleted.'));
        } else {
            $this->Flash->error(__('The direccion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
