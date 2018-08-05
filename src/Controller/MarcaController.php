<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Marca Controller
 *
 * @property \App\Model\Table\MarcaTable $Marca
 *
 * @method \App\Model\Entity\Marca[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MarcaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $marca = $this->paginate($this->Marca);

        $this->set(compact('marca'));
    }

    /**
     * View method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $marca = $this->Marca->get($id, [
            'contain' => ['Articulo']
        ]);

        $this->set('marca', $marca);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $marca = $this->Marca->newEntity();
        if ($this->request->is('post')) {
            $marca = $this->Marca->patchEntity($marca, $this->request->getData());
            if ($this->Marca->save($marca)) {
                $this->Flash->success(__('The marca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The marca could not be saved. Please, try again.'));
        }
        $this->set(compact('marca'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $marca = $this->Marca->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $marca = $this->Marca->patchEntity($marca, $this->request->getData());
            if ($this->Marca->save($marca)) {
                $this->Flash->success(__('The marca has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The marca could not be saved. Please, try again.'));
        }
        $this->set(compact('marca'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Marca id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $marca = $this->Marca->get($id);
        if ($this->Marca->delete($marca)) {
            $this->Flash->success(__('The marca has been deleted.'));
        } else {
            $this->Flash->error(__('The marca could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
