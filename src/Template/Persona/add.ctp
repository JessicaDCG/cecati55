<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['action' => 'index']) ?></li>
        <!--
        <li><?= $this->Html->link(__('List Contacto'), ['controller' => 'Contacto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contacto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sexo'), ['controller' => 'Sexo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sexo'), ['controller' => 'Sexo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumno'), ['controller' => 'Alumno', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumno', 'action' => 'add']) ?></li>
        -->
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persona form large-9 medium-8 columns content">
    <?= $this->Form->create($persona) ?>
    <fieldset>
        <legend><?= __('Add Persona') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido_paterno');
            echo $this->Form->control('apellido_materno');
            
            //echo $this->Form->control('contacto_id', ['options' => $contacto, 'empty' => true]);
            
            echo $this->Form->input('fecha_nacimiento', array(
                'label' => 'Fecha Nacimiento', 
                'dateFormat' => 'DMY',
                'minYear' => date('Y') - 80,
                'maxYear' => date('Y') - 0 ));

            echo $this->Form->input('recha_registro', array(
                'label' => 'Fecha FechaRegistro', 
                'dateFormat' => 'DMY',
                'minYear' => date('Y') - 0,
                'maxYear' => date('Y') - 0 ));

            //echo $this->Form->control('contactoFK');
            echo $this->Form->input('sexo_id', array(
                'type'    => 'select',
                'options' => $ArraySexos,
                'empty' => 'Selecciona sexo',
                'label' => 'Sexo'
            ));
        ?>
    </fieldset>
    <fieldset>        
        <legend>Add Personalplantel</legend>
        <?php
            //echo $this->Form->control('personal_plantel.areaFK');
            
            echo $this->Form->input('personalplantel.area_id', array(
                'type'    => 'select',
                'options' => $ArrayAreas,
                'empty' => 'Selecciona Area',
                'label' => 'Area'
            ));
           
            if('personal_plantel.areaFK' == 2){
                 echo $this->Form->input('personalPlantel.taller_id', array(
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
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
