<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Proveedor $proveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Proveedor'), ['action' => 'edit', $proveedor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Proveedor'), ['action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Proveedor'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacto'), ['controller' => 'Contacto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contacto', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipoproveedor'), ['controller' => 'Tipoproveedor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipoproveedor'), ['controller' => 'Tipoproveedor', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="proveedor view large-9 medium-8 columns content">
    <h3><?= h($proveedor->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($proveedor->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= h($proveedor->empresa) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacto') ?></th>
            <td><?= $proveedor->has('contacto') ? $this->Html->link($proveedor->contacto->id, ['controller' => 'Contacto', 'action' => 'view', $proveedor->contacto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rfc') ?></th>
            <td><?= h($proveedor->rfc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipoproveedor') ?></th>
            <td><?= $proveedor->has('tipoproveedor') ? $this->Html->link($proveedor->tipoproveedor->id, ['controller' => 'Tipoproveedor', 'action' => 'view', $proveedor->tipoproveedor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $proveedor->has('usuario') ? $this->Html->link($proveedor->usuario->id, ['controller' => 'Usuario', 'action' => 'view', $proveedor->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($proveedor->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Articulosolicitado') ?></h4>
        <?php if (!empty($proveedor->articulosolicitado)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('Requisicion Id') ?></th>
                <th scope="col"><?= __('Proveedor Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Fecha Termino') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proveedor->articulosolicitado as $articulosolicitado): ?>
            <tr>
                <td><?= h($articulosolicitado->id) ?></td>
                <td><?= h($articulosolicitado->articulo_id) ?></td>
                <td><?= h($articulosolicitado->requisicion_id) ?></td>
                <td><?= h($articulosolicitado->proveedor_id) ?></td>
                <td><?= h($articulosolicitado->fecha) ?></td>
                <td><?= h($articulosolicitado->fecha_termino) ?></td>
                <td><?= h($articulosolicitado->cantidad) ?></td>
                <td><?= h($articulosolicitado->precio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articulosolicitado', 'action' => 'view', $articulosolicitado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articulosolicitado', 'action' => 'edit', $articulosolicitado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articulosolicitado', 'action' => 'delete', $articulosolicitado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulosolicitado->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Solicitudesproveedor') ?></h4>
        <?php if (!empty($proveedor->solicitudesproveedor)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Proveedor Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($proveedor->solicitudesproveedor as $solicitudesproveedor): ?>
            <tr>
                <td><?= h($solicitudesproveedor->id) ?></td>
                <td><?= h($solicitudesproveedor->articulo_id) ?></td>
                <td><?= h($solicitudesproveedor->cantidad) ?></td>
                <td><?= h($solicitudesproveedor->status) ?></td>
                <td><?= h($solicitudesproveedor->proveedor_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Solicitudesproveedor', 'action' => 'view', $solicitudesproveedor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Solicitudesproveedor', 'action' => 'edit', $solicitudesproveedor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Solicitudesproveedor', 'action' => 'delete', $solicitudesproveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudesproveedor->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
