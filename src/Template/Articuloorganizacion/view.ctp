<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articuloorganizacion $articuloorganizacion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Articuloorganizacion'), ['action' => 'edit', $articuloorganizacion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Articuloorganizacion'), ['action' => 'delete', $articuloorganizacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articuloorganizacion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articuloorganizacion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articuloorganizacion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estante'), ['controller' => 'Estante', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estante'), ['controller' => 'Estante', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articuloorganizacion view large-9 medium-8 columns content">
    <h3><?= h($articuloorganizacion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Articulo') ?></th>
            <td><?= $articuloorganizacion->has('articulo') ? $this->Html->link($articuloorganizacion->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $articuloorganizacion->articulo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estante') ?></th>
            <td><?= $articuloorganizacion->has('estante') ? $this->Html->link($articuloorganizacion->estante->id, ['controller' => 'Estante', 'action' => 'view', $articuloorganizacion->estante->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($articuloorganizacion->id) ?></td>
        </tr>
    </table>
</div>
