<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Proveedor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Contacto'), ['controller' => 'Contacto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contacto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipoproveedor'), ['controller' => 'Tipoproveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipoproveedor'), ['controller' => 'Tipoproveedor', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proveedor form large-9 medium-8 columns content">
    <?= $this->Form->create($proveedor) ?>
    <fieldset>
        <legend><?= __('Add Proveedor') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('empresa');
            echo $this->Form->control('contacto_id', ['options' => $contacto, 'empty' => true]);
            echo $this->Form->control('rfc');
            echo $this->Form->control('tipo_id', ['options' => $tipoproveedor, 'empty' => true]);
            echo $this->Form->control('usuario_id', ['options' => $usuario, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
