<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Requisicion Controller
 *
 * @property \App\Model\Table\RequisicionTable $Requisicion
 *
 * @method \App\Model\Entity\Requisicion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RequisicionController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Personalplantel', 'Curso']
        ];
        $requisicion = $this->paginate($this->Requisicion);

        $this->set(compact('requisicion'));
    }

    /**
     * View method
     *
     * @param string|null $id Requisicion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $requisicion = $this->Requisicion->get($id, [
            'contain' => ['Personalplantel', 'Curso', 'Articulosolicitado']
        ]);

        $this->set('requisicion', $requisicion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $requisicion = $this->Requisicion->newEntity();
        if ($this->request->is('post')) {
            $requisicion = $this->Requisicion->patchEntity($requisicion, $this->request->getData());
            if ($this->Requisicion->save($requisicion)) {
                $this->Flash->success(__('The requisicion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requisicion could not be saved. Please, try again.'));
        }
        $personalplantel = $this->Requisicion->Personalplantel->find('list', ['limit' => 200]);
        $curso = $this->Requisicion->Curso->find('list', ['limit' => 200]);
        $this->set(compact('requisicion', 'personalplantel', 'curso'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Requisicion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $requisicion = $this->Requisicion->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $requisicion = $this->Requisicion->patchEntity($requisicion, $this->request->getData());
            if ($this->Requisicion->save($requisicion)) {
                $this->Flash->success(__('The requisicion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The requisicion could not be saved. Please, try again.'));
        }
        $personalplantel = $this->Requisicion->Personalplantel->find('list', ['limit' => 200]);
        $curso = $this->Requisicion->Curso->find('list', ['limit' => 200]);
        $this->set(compact('requisicion', 'personalplantel', 'curso'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Requisicion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $requisicion = $this->Requisicion->get($id);
        if ($this->Requisicion->delete($requisicion)) {
            $this->Flash->success(__('The requisicion has been deleted.'));
        } else {
            $this->Flash->error(__('The requisicion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
