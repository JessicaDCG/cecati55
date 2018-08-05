<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Controlexistencias Controller
 *
 * @property \App\Model\Table\ControlexistenciasTable $Controlexistencias
 *
 * @method \App\Model\Entity\Controlexistencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ControlexistenciasController extends AppController
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
        $controlexistencias = $this->paginate($this->Controlexistencias);

        $this->set(compact('controlexistencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Controlexistencia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $controlexistencia = $this->Controlexistencias->get($id, [
            'contain' => ['Articulo']
        ]);

        $this->set('controlexistencia', $controlexistencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $controlexistencia = $this->Controlexistencias->newEntity();
        if ($this->request->is('post')) {
            $controlexistencia = $this->Controlexistencias->patchEntity($controlexistencia, $this->request->getData());
            if ($this->Controlexistencias->save($controlexistencia)) {
                $this->Flash->success(__('The controlexistencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The controlexistencia could not be saved. Please, try again.'));
        }
        $articulo = $this->Controlexistencias->Articulo->find('list', ['limit' => 200]);
        $this->set(compact('controlexistencia', 'articulo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Controlexistencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $controlexistencia = $this->Controlexistencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $controlexistencia = $this->Controlexistencias->patchEntity($controlexistencia, $this->request->getData());
            if ($this->Controlexistencias->save($controlexistencia)) {
                $this->Flash->success(__('The controlexistencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The controlexistencia could not be saved. Please, try again.'));
        }
        $articulo = $this->Controlexistencias->Articulo->find('list', ['limit' => 200]);
        $this->set(compact('controlexistencia', 'articulo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Controlexistencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $controlexistencia = $this->Controlexistencias->get($id);
        if ($this->Controlexistencias->delete($controlexistencia)) {
            $this->Flash->success(__('The controlexistencia has been deleted.'));
        } else {
            $this->Flash->error(__('The controlexistencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
