<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulosolicitado $articulosolicitado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Articulosolicitado'), ['action' => 'edit', $articulosolicitado->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Articulosolicitado'), ['action' => 'delete', $articulosolicitado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulosolicitado->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requisicion'), ['controller' => 'Requisicion', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requisicion'), ['controller' => 'Requisicion', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articulosolicitado view large-9 medium-8 columns content">
    <h3><?= h($articulosolicitado->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Articulo') ?></th>
            <td><?= $articulosolicitado->has('articulo') ? $this->Html->link($articulosolicitado->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $articulosolicitado->articulo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Requisicion') ?></th>
            <td><?= $articulosolicitado->has('requisicion') ? $this->Html->link($articulosolicitado->requisicion->id, ['controller' => 'Requisicion', 'action' => 'view', $articulosolicitado->requisicion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proveedor') ?></th>
            <td><?= $articulosolicitado->has('proveedor') ? $this->Html->link($articulosolicitado->proveedor->id, ['controller' => 'Proveedor', 'action' => 'view', $articulosolicitado->proveedor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($articulosolicitado->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($articulosolicitado->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($articulosolicitado->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($articulosolicitado->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Termino') ?></th>
            <td><?= h($articulosolicitado->fecha_termino) ?></td>
        </tr>
    </table>
</div>
