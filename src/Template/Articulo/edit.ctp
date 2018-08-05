<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo $articulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $articulo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Unidad'), ['controller' => 'Unidad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unidad'), ['controller' => 'Unidad', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Marca'), ['controller' => 'Marca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Marca'), ['controller' => 'Marca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Catcategoria'), ['controller' => 'Catcategoria', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Catcategorium'), ['controller' => 'Catcategoria', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Controlexistencias'), ['controller' => 'Controlexistencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Controlexistencia'), ['controller' => 'Controlexistencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entrada'), ['controller' => 'Entrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entrada'), ['controller' => 'Entrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Existenciames'), ['controller' => 'Existenciames', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Existenciame'), ['controller' => 'Existenciames', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maximominimo'), ['controller' => 'Maximominimo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maximominimo'), ['controller' => 'Maximominimo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salida'), ['controller' => 'Salida', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salida'), ['controller' => 'Salida', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articulo form large-9 medium-8 columns content">
    <?= $this->Form->create($articulo) ?>
    <fieldset>
        <legend><?= __('Edit Articulo') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('clave_articulo');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('unidad_id', ['options' => $unidad, 'empty' => true]);
            echo $this->Form->control('stock');
            echo $this->Form->control('marca_id', ['options' => $marca, 'empty' => true]);
            echo $this->Form->control('categoria_id', ['options' => $catcategoria, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
