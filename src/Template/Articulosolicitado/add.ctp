<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulosolicitado $articulosolicitado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requisicion'), ['controller' => 'Requisicion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requisicion'), ['controller' => 'Requisicion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articulosolicitado form large-9 medium-8 columns content">
    <?= $this->Form->create($articulosolicitado) ?>
    <fieldset>
        <legend><?= __('Add Articulosolicitado') ?></legend>
        <?php
            echo $this->Form->control('articulo_id', ['options' => $articulo, 'empty' => true]);
            echo $this->Form->control('requisicion_id', ['options' => $requisicion, 'empty' => true]);
            echo $this->Form->control('proveedor_id', ['options' => $proveedor, 'empty' => true]);
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('fecha_termino', ['empty' => true]);
            echo $this->Form->control('cantidad');
            echo $this->Form->control('precio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
