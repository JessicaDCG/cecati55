<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="usuario index large-9 medium-8 columns content">
    <h3><?= __('Usuario') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contraseña') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuario as $usuario): ?>
            <tr>
                <td><?= $this->Number->format($usuario->id) ?></td>
                <td><?= h($usuario->usuario) ?></td>
                <td><?= h($usuario->contraseña) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $usuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $usuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?>
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
