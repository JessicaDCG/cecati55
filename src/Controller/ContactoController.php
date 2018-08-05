<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Contacto Controller
 *
 * @property \App\Model\Table\ContactoTable $Contacto
 *
 * @method \App\Model\Entity\Contacto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ContactoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Direccion']
        ];
        $contacto = $this->paginate($this->Contacto);

        $this->set(compact('contacto'));
    }

    /**
     * View method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $contacto = $this->Contacto->get($id, [
            'contain' => ['Direccion', 'Persona', 'Proveedor']
        ]);

        $this->set('contacto', $contacto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $contacto = $this->Contacto->newEntity();
        if ($this->request->is('post')) {
            $contacto = $this->Contacto->patchEntity($contacto, $this->request->getData());
            if ($this->Contacto->save($contacto)) {
                $this->Flash->success(__('The contacto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacto could not be saved. Please, try again.'));
        }
        $direccion = $this->Contacto->Direccion->find('list', ['limit' => 200]);
        $this->set(compact('contacto', 'direccion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $contacto = $this->Contacto->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $contacto = $this->Contacto->patchEntity($contacto, $this->request->getData());
            if ($this->Contacto->save($contacto)) {
                $this->Flash->success(__('The contacto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The contacto could not be saved. Please, try again.'));
        }
        $direccion = $this->Contacto->Direccion->find('list', ['limit' => 200]);
        $this->set(compact('contacto', 'direccion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Contacto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $contacto = $this->Contacto->get($id);
        if ($this->Contacto->delete($contacto)) {
            $this->Flash->success(__('The contacto has been deleted.'));
        } else {
            $this->Flash->error(__('The contacto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
