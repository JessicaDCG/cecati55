<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudesproveedor[]|\Cake\Collection\CollectionInterface $solicitudesproveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Solicitudesproveedor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="solicitudesproveedor index large-9 medium-8 columns content">
    <h3><?= __('Solicitudesproveedor') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('articulo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedor_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($solicitudesproveedor as $solicitudesproveedor): ?>
            <tr>
                <td><?= $this->Number->format($solicitudesproveedor->id) ?></td>
                <td><?= $solicitudesproveedor->has('articulo') ? $this->Html->link($solicitudesproveedor->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $solicitudesproveedor->articulo->id]) : '' ?></td>
                <td><?= $this->Number->format($solicitudesproveedor->cantidad) ?></td>
                <td><?= h($solicitudesproveedor->status) ?></td>
                <td><?= $solicitudesproveedor->has('proveedor') ? $this->Html->link($solicitudesproveedor->proveedor->id, ['controller' => 'Proveedor', 'action' => 'view', $solicitudesproveedor->proveedor->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $solicitudesproveedor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitudesproveedor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitudesproveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudesproveedor->id)]) ?>
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
