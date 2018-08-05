<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articuloorganizacion[]|\Cake\Collection\CollectionInterface $articuloorganizacion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Articuloorganizacion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estante'), ['controller' => 'Estante', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estante'), ['controller' => 'Estante', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articuloorganizacion index large-9 medium-8 columns content">
    <h3><?= __('Articuloorganizacion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('articulo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estante_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articuloorganizacion as $articuloorganizacion): ?>
            <tr>
                <td><?= $this->Number->format($articuloorganizacion->id) ?></td>
                <td><?= $articuloorganizacion->has('articulo') ? $this->Html->link($articuloorganizacion->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $articuloorganizacion->articulo->id]) : '' ?></td>
                <td><?= $articuloorganizacion->has('estante') ? $this->Html->link($articuloorganizacion->estante->id, ['controller' => 'Estante', 'action' => 'view', $articuloorganizacion->estante->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articuloorganizacion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articuloorganizacion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articuloorganizacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articuloorganizacion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
