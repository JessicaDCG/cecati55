<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Personalplantel Controller
 *
 * @property \App\Model\Table\PersonalplantelTable $Personalplantel
 *
 * @method \App\Model\Entity\Personalplantel[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PersonalplantelController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Area', 'Persona', 'Usuario', 'Taller']
        ];
        $personalplantel = $this->paginate($this->Personalplantel);

        $this->set(compact('personalplantel'));
    }

    /**
     * View method
     *
     * @param string|null $id Personalplantel id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $personalplantel = $this->Personalplantel->get($id, [
            'contain' => ['Area', 'Persona', 'Usuario', 'Taller']
        ]);

        $this->set('personalplantel', $personalplantel);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $personalplantel = $this->Personalplantel->newEntity();

        
        $this->cargarDDL();

        if ($this->request->is('post')) {

            //$personalplantel = $this->Personalplantel->patchEntity($personalplantel, $this->request->getData());

            $personalplantel = $this->Personalplantel->patchEntity($personalplantel, $this->request->data, [
              'associated' => ['Persona.Contacto.Direccion.Municipio','Usuario']
            ]);

            if ($this->Personalplantel->save($personalplantel)) {
                $this->Flash->success(__('The personalplantel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personalplantel could not be saved. Please, try again.'));
        }
        $area = $this->Personalplantel->Area->find('list', ['limit' => 200]);
        $persona = $this->Personalplantel->Persona->find('list', ['limit' => 200]);
        $usuario = $this->Personalplantel->Usuario->find('list', ['limit' => 200]);
        $taller = $this->Personalplantel->Taller->find('list', ['limit' => 200]);
        $this->set(compact('personalplantel', 'area', 'persona', 'usuario', 'taller'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Personalplantel id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $personalplantel = $this->Personalplantel->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $personalplantel = $this->Personalplantel->patchEntity($personalplantel, $this->request->getData());
            if ($this->Personalplantel->save($personalplantel)) {
                $this->Flash->success(__('The personalplantel has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The personalplantel could not be saved. Please, try again.'));
        }
        $area = $this->Personalplantel->Area->find('list', ['limit' => 200]);
        $persona = $this->Personalplantel->Persona->find('list', ['limit' => 200]);
        $usuario = $this->Personalplantel->Usuario->find('list', ['limit' => 200]);
        $taller = $this->Personalplantel->Taller->find('list', ['limit' => 200]);
        $this->set(compact('personalplantel', 'area', 'persona', 'usuario', 'taller'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Personalplantel id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $personalplantel = $this->Personalplantel->get($id);
        if ($this->Personalplantel->delete($personalplantel)) {
            $this->Flash->success(__('The personalplantel has been deleted.'));
        } else {
            $this->Flash->error(__('The personalplantel could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    // CArgar dropdawnlist
    public function cargarDDL()
    {
        ///////////ArraySexos
        $sexos = TableRegistry::get('Sexo');    
        $ArraySexos = $sexos->find()->toList();            
        $arrayS = array();
        
        foreach ($ArraySexos as $sexo ) {                                              
            $arrayS[$sexo['id']] = $sexo['sexo'];                              
        }
        $ArraySexos=$arrayS;
        $this->set('ArraySexos', $ArraySexos);     

        ///////////ArrayEstados
        $estados = TableRegistry::get('Estado');    
        $ArrayEstados = $estados->find()->toList();            
        $arrayE = array();
        
        foreach ($ArrayEstados as $estado ) {                                              
            $arrayE[$estado['id']] = $estado['estado'];                              
        }
        $ArrayEstados=$arrayE;
        $this->set('ArrayEstados', $ArrayEstados); 

        ///////////ArrayMunicipios
        $municipios = TableRegistry::get('Municipio');    
        $ArrayMunicipios = $municipios->find()->toList();            
        $arrayM = array();
        
        foreach ($ArrayMunicipios as $municipio ) {                                              
            $arrayM[$municipio['id']] = $municipio['municipio'];                              
        }
        $ArrayMunicipios=$arrayM;
        $this->set('ArrayMunicipios', $ArrayMunicipios); 

        ///////////ArrayAreas
        $areas = TableRegistry::get('Area');    
        $ArrayAreas = $areas->find()->toList();            
        $arrayA = array();
        
        foreach ($ArrayAreas as $area ) {                                              
            $arrayA[$area['id']] = $area['area'];                              
        }
        $ArrayAreas=$arrayA;
        $this->set('ArrayAreas', $ArrayAreas); 

        /////////ArrayTaller
        $talleres = TableRegistry::get('Taller');    
        $ArrayTaller = $talleres->find()->toList();            
        $arrayT = array();
        
        foreach ($ArrayTaller as $taller ) {                                              
            $arrayT[$taller['id']] = $taller['taller'];                              
        }
        $ArrayTaller=$arrayT;
        $this->set('ArrayTaller', $ArrayTaller); 
        ///////////
    }

}
