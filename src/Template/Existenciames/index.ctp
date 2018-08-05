<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Existenciame[]|\Cake\Collection\CollectionInterface $existenciames
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Existenciame'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="existenciames index large-9 medium-8 columns content">
    <h3><?= __('Existenciames') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('articulo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($existenciames as $existenciame): ?>
            <tr>
                <td><?= $this->Number->format($existenciame->id) ?></td>
                <td><?= $this->Number->format($existenciame->inicio) ?></td>
                <td><?= $this->Number->format($existenciame->fin) ?></td>
                <td><?= $existenciame->has('articulo') ? $this->Html->link($existenciame->articulo->id, ['controller' => 'Articulo', 'action' => 'view', $existenciame->articulo->id]) : '' ?></td>
                <td><?= h($existenciame->fecha) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $existenciame->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $existenciame->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $existenciame->id], ['confirm' => __('Are you sure you want to delete # {0}?', $existenciame->id)]) ?>
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
