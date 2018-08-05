<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Direccion $direccion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Direccion'), ['action' => 'edit', $direccion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Direccion'), ['action' => 'delete', $direccion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $direccion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Direccion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direccion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Municipio'), ['controller' => 'Municipio', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Municipio'), ['controller' => 'Municipio', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contacto'), ['controller' => 'Contacto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contacto', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="direccion view large-9 medium-8 columns content">
    <h3><?= h($direccion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Calle') ?></th>
            <td><?= h($direccion->calle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Colonia') ?></th>
            <td><?= h($direccion->colonia) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($direccion->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Municipio') ?></th>
            <td><?= $direccion->has('municipio') ? $this->Html->link($direccion->municipio->id, ['controller' => 'Municipio', 'action' => 'view', $direccion->municipio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($direccion->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Contacto') ?></h4>
        <?php if (!empty($direccion->contacto)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Correo') ?></th>
                <th scope="col"><?= __('Direccion Id') ?></th>
                <th scope="col"><?= __('Telefono Uno') ?></th>
                <th scope="col"><?= __('Telefono Dos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($direccion->contacto as $contacto): ?>
            <tr>
                <td><?= h($contacto->id) ?></td>
                <td><?= h($contacto->correo) ?></td>
                <td><?= h($contacto->direccion_id) ?></td>
                <td><?= h($contacto->telefono_uno) ?></td>
                <td><?= h($contacto->telefono_dos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Contacto', 'action' => 'view', $contacto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Contacto', 'action' => 'edit', $contacto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Contacto', 'action' => 'delete', $contacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
