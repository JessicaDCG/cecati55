<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo[]|\Cake\Collection\CollectionInterface $articulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Unidad'), ['controller' => 'Unidad', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Unidad'), ['controller' => 'Unidad', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Marca'), ['controller' => 'Marca', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Marca'), ['controller' => 'Marca', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Catcategoria'), ['controller' => 'Catcategoria', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Catcategorium'), ['controller' => 'Catcategoria', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Controlexistencias'), ['controller' => 'Controlexistencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Controlexistencia'), ['controller' => 'Controlexistencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entrada'), ['controller' => 'Entrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entrada'), ['controller' => 'Entrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Existenciames'), ['controller' => 'Existenciames', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Existenciame'), ['controller' => 'Existenciames', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Maximominimo'), ['controller' => 'Maximominimo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Maximominimo'), ['controller' => 'Maximominimo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Salida'), ['controller' => 'Salida', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Salida'), ['controller' => 'Salida', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articulo index large-9 medium-8 columns content">
    <h3><?= __('Articulo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clave_articulo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('unidad_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stock') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marca_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articulo as $articulo): ?>
            <tr>
                <td><?= $this->Number->format($articulo->id) ?></td>
                <td><?= h($articulo->nombre) ?></td>
                <td><?= h($articulo->clave_articulo) ?></td>
                <td><?= $articulo->has('unidad') ? $this->Html->link($articulo->unidad->id, ['controller' => 'Unidad', 'action' => 'view', $articulo->unidad->id]) : '' ?></td>
                <td><?= $this->Number->format($articulo->stock) ?></td>
                <td><?= $articulo->has('marca') ? $this->Html->link($articulo->marca->id, ['controller' => 'Marca', 'action' => 'view', $articulo->marca->id]) : '' ?></td>
                <td><?= $articulo->has('catcategorium') ? $this->Html->link($articulo->catcategorium->id, ['controller' => 'Catcategoria', 'action' => 'view', $articulo->catcategorium->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $articulo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $articulo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $articulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id)]) ?>
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
