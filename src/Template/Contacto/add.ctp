<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contacto $contacto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Contacto'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Direccion'), ['controller' => 'Direccion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Persona', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacto form large-9 medium-8 columns content">
    <?= $this->Form->create($contacto) ?>
    <fieldset>
        <legend><?= __('Add Contacto') ?></legend>
        <?php
            echo $this->Form->control('correo');
            echo $this->Form->control('direccion_id', ['options' => $direccion, 'empty' => true]);
            echo $this->Form->control('telefono_uno');
            echo $this->Form->control('telefono_dos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
