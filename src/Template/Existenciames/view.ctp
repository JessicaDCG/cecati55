<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Existenciame $existenciame
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Existenciame'), ['action' => 'edit', $existenciame->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Existenciame'), ['action' => 'delete', $existenciame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $existenciame->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Existenciames'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Existenciame'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="existenciames view large-9 medium-8 columns content">
    <h3><?= h($existenciame->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Articulo') ?></th>
            <td><?= $existenciame->has('articulo') ? $this->Html->link($existenciame->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $existenciame->articulo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($existenciame->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inicio') ?></th>
            <td><?= $this->Number->format($existenciame->inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fin') ?></th>
            <td><?= $this->Number->format($existenciame->fin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($existenciame->fecha) ?></td>
        </tr>
    </table>
</div>
