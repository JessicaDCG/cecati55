<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Persona Controller
 *
 * @property \App\Model\Table\PersonaTable $Persona
 *
 * @method \App\Model\Entity\Persona[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Contacto', 'Sexo']
        ];
        $persona = $this->paginate($this->Persona);

        $this->set(compact('persona'));
    }

    /**
     * View method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $persona = $this->Persona->get($id, [
            'contain' => ['Contacto', 'Sexo', 'Personalplantel', 'Alumno']
        ]);

        $this->set('persona', $persona);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $persona = $this->Persona->newEntity();
        if ($this->request->is('post')) {
            $persona = $this->Persona->patchEntity($persona, $this->request->getData());
            if ($this->Persona->save($persona)) {
                $this->Flash->success(__('The persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persona could not be saved. Please, try again.'));
        }
        $contacto = $this->Persona->Contacto->find('list', ['limit' => 200]);
        $sexo = $this->Persona->Sexo->find('list', ['limit' => 200]);
        $personalplantel = $this->Persona->Personalplantel->find('list', ['limit' => 200]);
        $this->set(compact('persona', 'contacto', 'sexo', 'personalplantel'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $persona = $this->Persona->get($id, [
            'contain' => ['Personalplantel']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $persona = $this->Persona->patchEntity($persona, $this->request->getData());
            if ($this->Persona->save($persona)) {
                $this->Flash->success(__('The persona has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The persona could not be saved. Please, try again.'));
        }
        $contacto = $this->Persona->Contacto->find('list', ['limit' => 200]);
        $sexo = $this->Persona->Sexo->find('list', ['limit' => 200]);
        $personalplantel = $this->Persona->Personalplantel->find('list', ['limit' => 200]);
        $this->set(compact('persona', 'contacto', 'sexo', 'personalplantel'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Persona id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $persona = $this->Persona->get($id);
        if ($this->Persona->delete($persona)) {
            $this->Flash->success(__('The persona has been deleted.'));
        } else {
            $this->Flash->error(__('The persona could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function buscarPersona($id){
        
        $personas = TableRegistry::get('Persona');
        $obj = $personas->find()
                ->where(['id' => $id])
                ->first();                   
        return $obj['Nombre'].$obj['apellido_paterno'];          
    }
}
