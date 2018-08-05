<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entrada $entrada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entrada'), ['action' => 'edit', $entrada->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entrada'), ['action' => 'delete', $entrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrada->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Entrada'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entrada'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipoentrada'), ['controller' => 'Tipoentrada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipoentrada'), ['controller' => 'Tipoentrada', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Condicion'), ['controller' => 'Condicion', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Condicion'), ['controller' => 'Condicion', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodo'), ['controller' => 'Periodo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entrada view large-9 medium-8 columns content">
    <h3><?= h($entrada->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Folio') ?></th>
            <td><?= h($entrada->folio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Articulo') ?></th>
            <td><?= $entrada->has('articulo') ? $this->Html->link($entrada->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $entrada->articulo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoentrada') ?></th>
            <td><?= $entrada->has('tipoentrada') ? $this->Html->link($entrada->tipoentrada->id, ['controller' => 'Tipoentrada', 'action' => 'view', $entrada->tipoentrada->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Condicion') ?></th>
            <td><?= $entrada->has('condicion') ? $this->Html->link($entrada->condicion->id, ['controller' => 'Condicion', 'action' => 'view', $entrada->condicion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= $entrada->has('periodo') ? $this->Html->link($entrada->periodo->id, ['controller' => 'Periodo', 'action' => 'view', $entrada->periodo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($entrada->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($entrada->cantidad) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Precio') ?></th>
            <td><?= $this->Number->format($entrada->precio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($entrada->fecha) ?></td>
        </tr>
    </table>
</div>
