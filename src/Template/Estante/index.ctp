<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estante[]|\Cake\Collection\CollectionInterface $estante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Estante'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estante index large-9 medium-8 columns content">
    <h3><?= __('Estante') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estante as $estante): ?>
            <tr>
                <td><?= $this->Number->format($estante->id) ?></td>
                <td><?= h($estante->nombre) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estante->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estante->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estante->id)]) ?>
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
