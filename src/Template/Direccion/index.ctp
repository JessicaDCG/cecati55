<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Direccion[]|\Cake\Collection\CollectionInterface $direccion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Direccion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Municipio'), ['controller' => 'Municipio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipio'), ['controller' => 'Municipio', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacto'), ['controller' => 'Contacto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contacto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="direccion index large-9 medium-8 columns content">
    <h3><?= __('Direccion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('colonia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('numero') ?></th>
                <th scope="col"><?= $this->Paginator->sort('municipio_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($direccion as $direccion): ?>
            <tr>
                <td><?= $this->Number->format($direccion->id) ?></td>
                <td><?= h($direccion->calle) ?></td>
                <td><?= h($direccion->colonia) ?></td>
                <td><?= h($direccion->numero) ?></td>
                <td><?= $direccion->has('municipio') ? $this->Html->link($direccion->municipio->id, ['controller' => 'Municipio', 'action' => 'view', $direccion->municipio->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $direccion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $direccion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $direccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id)]) ?>
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
