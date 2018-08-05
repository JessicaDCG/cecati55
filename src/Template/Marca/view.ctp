<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca $marca
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Marca'), ['action' => 'edit', $marca->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Marca'), ['action' => 'delete', $marca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marca->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Marca'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marca'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="marca view large-9 medium-8 columns content">
    <h3><?= h($marca->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= h($marca->marca) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($marca->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Articulo') ?></h4>
        <?php if (!empty($marca->articulo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Clave Articulo') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Unidad Id') ?></th>
                <th scope="col"><?= __('Stock') ?></th>
                <th scope="col"><?= __('Marca Id') ?></th>
                <th scope="col"><?= __('Categoria Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($marca->articulo as $articulo): ?>
            <tr>
                <td><?= h($articulo->id) ?></td>
                <td><?= h($articulo->nombre) ?></td>
                <td><?= h($articulo->clave_articulo) ?></td>
                <td><?= h($articulo->descripcion) ?></td>
                <td><?= h($articulo->unidad_id) ?></td>
                <td><?= h($articulo->stock) ?></td>
                <td><?= h($articulo->marca_id) ?></td>
                <td><?= h($articulo->categoria_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articulo', 'action' => 'view', $articulo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articulo', 'action' => 'edit', $articulo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articulo', 'action' => 'delete', $articulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
