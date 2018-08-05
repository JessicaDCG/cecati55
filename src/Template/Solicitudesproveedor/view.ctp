<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudesproveedor $solicitudesproveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Solicitudesproveedor'), ['action' => 'edit', $solicitudesproveedor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Solicitudesproveedor'), ['action' => 'delete', $solicitudesproveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudesproveedor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Solicitudesproveedor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitudesproveedor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="solicitudesproveedor view large-9 medium-8 columns content">
    <h3><?= h($solicitudesproveedor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Articulo') ?></th>
            <td><?= $solicitudesproveedor->has('articulo') ? $this->Html->link($solicitudesproveedor->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $solicitudesproveedor->articulo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= h($solicitudesproveedor->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proveedor') ?></th>
            <td><?= $solicitudesproveedor->has('proveedor') ? $this->Html->link($solicitudesproveedor->proveedor->id, ['controller' => 'Proveedor', 'action' => 'view', $solicitudesproveedor->proveedor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($solicitudesproveedor->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cantidad') ?></th>
            <td><?= $this->Number->format($solicitudesproveedor->cantidad) ?></td>
        </tr>
    </table>
</div>
