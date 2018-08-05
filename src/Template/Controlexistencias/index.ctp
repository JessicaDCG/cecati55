<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Controlexistencia[]|\Cake\Collection\CollectionInterface $controlexistencias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Controlexistencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controlexistencias index large-9 medium-8 columns content">
    <h3><?= __('Controlexistencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('articulo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('costo_medio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('debe') ?></th>
                <th scope="col"><?= $this->Paginator->sort('haber') ?></th>
                <th scope="col"><?= $this->Paginator->sort('saldo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($controlexistencias as $controlexistencia): ?>
            <tr>
                <td><?= $this->Number->format($controlexistencia->id) ?></td>
                <td><?= $controlexistencia->has('articulo') ? $this->Html->link($controlexistencia->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $controlexistencia->articulo->id]) : '' ?></td>
                <td><?= $this->Number->format($controlexistencia->costo_medio) ?></td>
                <td><?= $this->Number->format($controlexistencia->debe) ?></td>
                <td><?= $this->Number->format($controlexistencia->haber) ?></td>
                <td><?= $this->Number->format($controlexistencia->saldo) ?></td>
                <td><?= h($controlexistencia->fecha) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $controlexistencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $controlexistencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $controlexistencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controlexistencia->id)]) ?>
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
