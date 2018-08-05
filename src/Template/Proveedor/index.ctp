<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor[]|\Cake\Collection\CollectionInterface $proveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacto'), ['controller' => 'Contacto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contacto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipoproveedor'), ['controller' => 'Tipoproveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipoproveedor'), ['controller' => 'Tipoproveedor', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="proveedor index large-9 medium-8 columns content">
    <h3><?= __('Proveedor') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('empresa') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contacto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rfc') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proveedor as $proveedor): ?>
            <tr>
                <td><?= $this->Number->format($proveedor->id) ?></td>
                <td><?= h($proveedor->nombre) ?></td>
                <td><?= h($proveedor->empresa) ?></td>
                <td><?= $proveedor->has('contacto') ? $this->Html->link($proveedor->contacto->id, ['controller' => 'Contacto', 'action' => 'view', $proveedor->contacto->id]) : '' ?></td>
                <td><?= h($proveedor->rfc) ?></td>
                <td><?= $proveedor->has('tipoproveedor') ? $this->Html->link($proveedor->tipoproveedor->id, ['controller' => 'Tipoproveedor', 'action' => 'view', $proveedor->tipoproveedor->id]) : '' ?></td>
                <td><?= $proveedor->has('usuario') ? $this->Html->link($proveedor->usuario->id, ['controller' => 'Usuario', 'action' => 'view', $proveedor->usuario->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $proveedor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $proveedor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id)]) ?>
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
