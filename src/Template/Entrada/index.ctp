<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entrada[]|\Cake\Collection\CollectionInterface $entrada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entrada'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipoentrada'), ['controller' => 'Tipoentrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipoentrada'), ['controller' => 'Tipoentrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Condicion'), ['controller' => 'Condicion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Condicion'), ['controller' => 'Condicion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodo'), ['controller' => 'Periodo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entrada index large-9 medium-8 columns content">
    <h3><?= __('Entrada') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('folio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('articulo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipoEntrada_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cantidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('precio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('condicion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entrada as $entrada): ?>
            <tr>
                <td><?= $this->Number->format($entrada->id) ?></td>
                <td><?= h($entrada->folio) ?></td>
                <td><?= $entrada->has('articulo') ? $this->Html->link($entrada->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $entrada->articulo->id]) : '' ?></td>
                <td><?= $entrada->has('tipoentrada') ? $this->Html->link($entrada->tipoentrada->id, ['controller' => 'Tipoentrada', 'action' => 'view', $entrada->tipoentrada->id]) : '' ?></td>
                <td><?= $this->Number->format($entrada->cantidad) ?></td>
                <td><?= $this->Number->format($entrada->precio) ?></td>
                <td><?= $entrada->has('condicion') ? $this->Html->link($entrada->condicion->id, ['controller' => 'Condicion', 'action' => 'view', $entrada->condicion->id]) : '' ?></td>
                <td><?= h($entrada->fecha) ?></td>
                <td><?= $entrada->has('periodo') ? $this->Html->link($entrada->periodo->id, ['controller' => 'Periodo', 'action' => 'view', $entrada->periodo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrada->id)]) ?>
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
