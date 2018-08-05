<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulosolicitado[]|\Cake\Collection\CollectionInterface $articulosolicitado
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requisicion'), ['controller' => 'Requisicion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requisicion'), ['controller' => 'Requisicion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articulosolicitado index large-9 medium-8 columns content">
    <h3><?= __('Articulosolicitado') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('articulo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('requisicion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proveedor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_termino') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articulosolicitado as $articulosolicitado): ?>
            <tr>
                <td><?= $this->Number->format($articulosolicitado->id) ?></td>
                <td><?= $articulosolicitado->has('articulo') ? $this->Html->link($articulosolicitado->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $articulosolicitado->articulo->id]) : '' ?></td>
                <td><?= $articulosolicitado->has('requisicion') ? $this->Html->link($articulosolicitado->requisicion->id, ['controller' => 'Requisicion', 'action' => 'view', $articulosolicitado->requisicion->id]) : '' ?></td>
                <td><?= $articulosolicitado->has('proveedor') ? $this->Html->link($articulosolicitado->proveedor->id, ['controller' => 'Proveedor', 'action' => 'view', $articulosolicitado->proveedor->id]) : '' ?></td>
                <td><?= h($articulosolicitado->fecha) ?></td>
                <td><?= h($articulosolicitado->fecha_termino) ?></td>
                <td><?= $this->Number->format($articulosolicitado->cantidad) ?></td>
                <td><?= $this->Number->format($articulosolicitado->precio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articulosolicitado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articulosolicitado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articulosolicitado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulosolicitado->id)]) ?>
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
