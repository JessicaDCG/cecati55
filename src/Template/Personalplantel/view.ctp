<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personalplantel $personalplantel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Personalplantel'), ['action' => 'edit', $personalplantel->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Personalplantel'), ['action' => 'delete', $personalplantel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personalplantel->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['action' => 'add']) ?> </li>
        
        <hr />

        <li><?= $this->Html->link(__('List Area'), ['controller' => 'Area', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Taller'), ['controller' => 'Taller', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="personalplantel view large-9 medium-8 columns content">
    <h3><?= h($personalplantel->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= $personalplantel->has('area') ? $this->Html->link($personalplantel->area->id, ['controller' => 'Area', 'action' => 'view', $personalplantel->area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Persona') ?></th>
            <td><?= $personalplantel->has('persona') ? $this->Html->link($personalplantel->persona->id, ['controller' => 'Persona', 'action' => 'view', $personalplantel->persona->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $personalplantel->has('usuario') ? $this->Html->link($personalplantel->usuario->id, ['controller' => 'Usuario', 'action' => 'view', $personalplantel->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Taller') ?></th>
            <td><?= $personalplantel->has('taller') ? $this->Html->link($personalplantel->taller->id, ['controller' => 'Taller', 'action' => 'view', $personalplantel->taller->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($personalplantel->id) ?></td>
        </tr>
    </table>
</div>
