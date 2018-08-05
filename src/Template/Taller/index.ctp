<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Taller[]|\Cake\Collection\CollectionInterface $taller
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Taller'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="taller index large-9 medium-8 columns content">
    <h3><?= __('Taller') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taller') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($taller as $taller): ?>
            <tr>
                <td><?= $this->Number->format($taller->id) ?></td>
                <td><?= h($taller->taller) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $taller->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $taller->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $taller->id], ['confirm' => __('Are you sure you want to delete # {0}?', $taller->id)]) ?>
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
