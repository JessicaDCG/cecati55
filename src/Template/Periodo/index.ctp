<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodo[]|\Cake\Collection\CollectionInterface $periodo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entrada'), ['controller' => 'Entrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entrada'), ['controller' => 'Entrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Foliosalida'), ['controller' => 'Foliosalida', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Foliosalida'), ['controller' => 'Foliosalida', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="periodo index large-9 medium-8 columns content">
    <h3><?= __('Periodo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($periodo as $periodo): ?>
            <tr>
                <td><?= $this->Number->format($periodo->id) ?></td>
                <td><?= h($periodo->fecha_inicio) ?></td>
                <td><?= h($periodo->fecha_fin) ?></td>
                <td><?= h($periodo->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $periodo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $periodo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $periodo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->id)]) ?>
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
