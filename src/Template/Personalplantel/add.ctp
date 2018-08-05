<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personalplantel $personalplantel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['action' => 'index']) ?></li>
     
        <hr />

        <li><?= $this->Html->link(__('List Area'), ['controller' => 'Area', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Taller'), ['controller' => 'Taller', 'action' => 'index']) ?></li>

    </ul>
</nav>

<?php
/* 
//AJAX for Dynamic Drop down 
$this->Js->get('#country_id')->event('change', 
    $this->Js->request(array( 
        'controller'=>'estado', 
        'action' =>'get_by_estado', 
    ), array( 
        'update' =>'#city_id', 
        'async' => true, 
        'method' => 'Post', 
        'dataExpression'=>true, 
        'data'=> $this->Js->serializeForm(array(
                 'isForm' => true,
                 'inline' => true
             ))
     ))
 );
 // END AJAX
 */
 ?>
<script>
// When the user clicks on <div>, open the popup
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 
</script>

<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>

</div>


<div class="personalplantel form large-9 medium-8 columns content">
    <?= $this->Form->create($personalplantel) ?>
    <!-- PERSONA -->
    <fieldset>
        <legend><?= __('Add Persona') ?></legend>
        <?php
            echo $this->Form->control('persona.nombre');
            echo $this->Form->control('persona.apellido_paterno');
            echo $this->Form->control('persona.apellido_materno');
            
            //echo $this->Form->control('contacto_id', ['options' => $contacto, 'empty' => true]);
            
            echo $this->Form->input('persona.fecha_nacimiento', array(
                'label' => 'Fecha Nacimiento', 
                'dateFormat' => 'DMY',
                'minYear' => date('Y') - 40,
                'maxYear' => date('Y') - 20 ));

            echo $this->Form->input('persona.recha_registro', array(
                'label' => 'Fecha FechaRegistro', 
                'dateFormat' => 'DMY',
                'minYear' => date('Y') - 0,
                'maxYear' => date('Y') - 0 ));

            //echo $this->Form->control('contactoFK');
            echo $this->Form->input('persona.sexo_id', array(
                'type'    => 'select',
                'options' => $ArraySexos,
                'empty' => 'Selecciona sexo',
                'label' => 'Sexo'
            ));
        ?>
    </fieldset>
    

    <!-- CONTACTO -->
    <fieldset>
        <legend><?= __('Add Contacto') ?></legend>
        <?php
            echo $this->Form->control('persona.contacto.correo');
            
            echo $this->Form->control('persona.contacto.telefono_uno');
            echo $this->Form->control('persona.contacto.telefono_dos');
        ?>
    </fieldset>
 
    

    <!-- DIRECCION -->
    <fieldset>
        <legend><?= __('Add Direccion') ?></legend>
        <?php
            echo $this->Form->control('persona.contacto.direccion.calle');
            echo $this->Form->control('persona.contacto.direccion.colonia');
            echo $this->Form->control('persona.contacto.direccion.numero');
            
            echo $this->Form->input('persona.contacto.direccion.municipio.estado_id', array(
                'type'    => 'select',
                'options' => $ArrayEstados,
                'empty' => 'Selecciona Estado',
                'label' => 'Estado'
            ));

            echo $this->Form->input('persona.contacto.direccion.municipio_id', array(
                'type'    => 'select',
                'options' => $ArrayMunicipios,
                'empty' => 'Selecciona Municipio',
                'label' => 'Municipio'
            ));
        ?>
    </fieldset>
    
    <!-- USUARIO -->
    <fieldset>
        <legend><?= __('Add Usuario') ?></legend>
        <?php
            echo $this->Form->control('usuario.usuario');
            echo $this->Form->control('usuario.contraseña');
        ?>
    </fieldset>

    <!-- PERSONAL PLANTEL -->
    <fieldset>        
        <legend><?= __('Add Personalplantel') ?></legend>
        <?php
            
            echo $this->Form->input('area_id', array(
                'type'    => 'select',
                'options' => $ArrayAreas,
                'empty' => 'Selecciona Area',
                'label' => 'Area'
            ));

            if($personalplantel->areaFK == 2){
                 echo $this->Form->input('taller_id', array(
                'type'    => 'select',
                'options' => $ArrayTaller,
                'empty' => 'Selecciona Taller',
                'label' => 'Taller'
                ));
            }
            //echo $this->Form->control('personaFK');
            //echo $this->Form->control('usuarioFK');
            //echo $this->Form->control('tallerFK');
        ?>

    </fieldset>

        <?php
            //echo $this->Form->control('area_id', ['options' => $area, 'empty' => true]);
            //echo $this->Form->control('persona_id', ['options' => $persona, 'empty' => true]);
            //echo $this->Form->control('usuario_id', ['options' => $usuario, 'empty' => true]);
            //echo $this->Form->control('taller_id', ['options' => $taller, 'empty' => true]);
        ?>
    
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>



