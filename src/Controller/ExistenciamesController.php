<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Existenciames Controller
 *
 * @property \App\Model\Table\ExistenciamesTable $Existenciames
 *
 * @method \App\Model\Entity\Existenciame[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ExistenciamesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articulo']
        ];
        $existenciames = $this->paginate($this->Existenciames);

        $this->set(compact('existenciames'));
    }

    /**
     * View method
     *
     * @param string|null $id Existenciame id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $existenciame = $this->Existenciames->get($id, [
            'contain' => ['Articulo']
        ]);

        $this->set('existenciame', $existenciame);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $existenciame = $this->Existenciames->newEntity();
        if ($this->request->is('post')) {
            $existenciame = $this->Existenciames->patchEntity($existenciame, $this->request->getData());
            if ($this->Existenciames->save($existenciame)) {
                $this->Flash->success(__('The existenciame has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The existenciame could not be saved. Please, try again.'));
        }
        $articulo = $this->Existenciames->Articulo->find('list', ['limit' => 200]);
        $this->set(compact('existenciame', 'articulo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Existenciame id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $existenciame = $this->Existenciames->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $existenciame = $this->Existenciames->patchEntity($existenciame, $this->request->getData());
            if ($this->Existenciames->save($existenciame)) {
                $this->Flash->success(__('The existenciame has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The existenciame could not be saved. Please, try again.'));
        }
        $articulo = $this->Existenciames->Articulo->find('list', ['limit' => 200]);
        $this->set(compact('existenciame', 'articulo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Existenciame id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $existenciame = $this->Existenciames->get($id);
        if ($this->Existenciames->delete($existenciame)) {
            $this->Flash->success(__('The existenciame has been deleted.'));
        } else {
            $this->Flash->error(__('The existenciame could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
