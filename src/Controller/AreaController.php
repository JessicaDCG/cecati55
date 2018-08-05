<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Area Controller
 *
 * @property \App\Model\Table\AreaTable $Area
 *
 * @method \App\Model\Entity\Area[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AreaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $area = $this->paginate($this->Area);

        $this->set(compact('area'));
    }

    /**
     * View method
     *
     * @param string|null $id Area id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $area = $this->Area->get($id, [
            'contain' => ['Personalplantel']
        ]);

        $personaCTRL= new PersonaController();
        $persona=$personaCTRL->buscarPersona($area['jefe_area_id']);

        $this->set('jefe_area_id', $persona);
        $this->set('area', $area);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $area = $this->Area->newEntity();

        $this->cargarDDL();

        if ($this->request->is('post')) {
            $area = $this->Area->patchEntity($area, $this->request->getData());
            if ($this->Area->save($area)) {
                $this->Flash->success(__('The area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area could not be saved. Please, try again.'));
        }
        $this->set(compact('area'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Area id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $area = $this->Area->get($id, [
            'contain' => []
        ]);

        $this->cargarDDL();

        if ($this->request->is(['patch', 'post', 'put'])) {
            $area = $this->Area->patchEntity($area, $this->request->getData());
            if ($this->Area->save($area)) {
                $this->Flash->success(__('The area has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The area could not be saved. Please, try again.'));
        }
        $this->set(compact('area'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Area id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $area = $this->Area->get($id);
        if ($this->Area->delete($area)) {
            $this->Flash->success(__('The area has been deleted.'));
        } else {
            $this->Flash->error(__('The area could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

        // CArgar dropdawnlist
    public function cargarDDL()
    {
        ///////////ArrayJefes
        $personal = TableRegistry::get('Personalplantel');    
        $ArrayJefes = $personal
            ->find()
            ->select(['id', 'persona_id'])
            //->where(['id !=' => 1])
            ->order(['id' => 'DESC'])
            ->toList();      

        $arrayJ = array();
        
        foreach ($ArrayJefes as $jefe ) {  

                $personas = TableRegistry::get('Persona');    
                $ArrayPersona = $personas
                    ->find()
                    ->select(['nombre', 'apellido_paterno'])
                    ->where(['id =' => $jefe['persona_id']])
                    ->first(); 

            $arrayJ[$jefe['id']] = $ArrayPersona['nombre'].' '.$ArrayPersona['apellido_paterno'];                              
        }
        //$ArrayJefes=$arrayJ;
        $this->set('ArrayJefes', $arrayJ);   
    }


    public function buscarArea($id){
        
        $areas = TableRegistry::get('Area');
        $obj = $areas->find()
                ->where(['id' => $id])
                ->first();                   
        return $obj['area'];          
    }



}
