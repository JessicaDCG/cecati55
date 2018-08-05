<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $persona->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contacto'), ['controller' => 'Contacto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contacto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sexo'), ['controller' => 'Sexo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sexo'), ['controller' => 'Sexo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumno'), ['controller' => 'Alumno', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumno', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persona form large-9 medium-8 columns content">
    <?= $this->Form->create($persona) ?>
    <fieldset>
        <legend><?= __('Edit Persona') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('apellido_paterno');
            echo $this->Form->control('apellido_materno');
            echo $this->Form->control('fecha_nacimiento', ['empty' => true]);
            echo $this->Form->control('recha_registro', ['empty' => true]);
            echo $this->Form->control('contacto_id', ['options' => $contacto, 'empty' => true]);
            echo $this->Form->control('sexo_id', ['options' => $sexo, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
