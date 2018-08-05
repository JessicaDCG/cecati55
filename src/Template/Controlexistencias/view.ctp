<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Controlexistencia $controlexistencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Controlexistencia'), ['action' => 'edit', $controlexistencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Controlexistencia'), ['action' => 'delete', $controlexistencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controlexistencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Controlexistencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Controlexistencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="controlexistencias view large-9 medium-8 columns content">
    <h3><?= h($controlexistencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Articulo') ?></th>
            <td><?= $controlexistencia->has('articulo') ? $this->Html->link($controlexistencia->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $controlexistencia->articulo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($controlexistencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Costo Medio') ?></th>
            <td><?= $this->Number->format($controlexistencia->costo_medio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Debe') ?></th>
            <td><?= $this->Number->format($controlexistencia->debe) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Haber') ?></th>
            <td><?= $this->Number->format($controlexistencia->haber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saldo') ?></th>
            <td><?= $this->Number->format($controlexistencia->saldo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($controlexistencia->fecha) ?></td>
        </tr>
    </table>
</div>
