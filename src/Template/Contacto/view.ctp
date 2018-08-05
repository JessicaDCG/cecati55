<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contacto $contacto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contacto'), ['action' => 'edit', $contacto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contacto'), ['action' => 'delete', $contacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Direccion'), ['controller' => 'Direccion', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccion', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Persona', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacto view large-9 medium-8 columns content">
    <h3><?= h($contacto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($contacto->correo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= $contacto->has('direccion') ? $this->Html->link($contacto->direccion->id, ['controller' => 'Direccion', 'action' => 'view', $contacto->direccion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Uno') ?></th>
            <td><?= h($contacto->telefono_uno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefono Dos') ?></th>
            <td><?= h($contacto->telefono_dos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contacto->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Persona') ?></h4>
        <?php if (!empty($contacto->persona)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Apellido Paterno') ?></th>
                <th scope="col"><?= __('Apellido Materno') ?></th>
                <th scope="col"><?= __('Fecha Nacimiento') ?></th>
                <th scope="col"><?= __('Recha Registro') ?></th>
                <th scope="col"><?= __('Contacto Id') ?></th>
                <th scope="col"><?= __('Sexo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contacto->persona as $persona): ?>
            <tr>
                <td><?= h($persona->id) ?></td>
                <td><?= h($persona->nombre) ?></td>
                <td><?= h($persona->apellido_paterno) ?></td>
                <td><?= h($persona->apellido_materno) ?></td>
                <td><?= h($persona->fecha_nacimiento) ?></td>
                <td><?= h($persona->recha_registro) ?></td>
                <td><?= h($persona->contacto_id) ?></td>
                <td><?= h($persona->sexo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Persona', 'action' => 'view', $persona->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Persona', 'action' => 'edit', $persona->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Persona', 'action' => 'delete', $persona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proveedor') ?></h4>
        <?php if (!empty($contacto->proveedor)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Empresa') ?></th>
                <th scope="col"><?= __('Contacto Id') ?></th>
                <th scope="col"><?= __('Rfc') ?></th>
                <th scope="col"><?= __('Tipo Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contacto->proveedor as $proveedor): ?>
            <tr>
                <td><?= h($proveedor->id) ?></td>
                <td><?= h($proveedor->nombre) ?></td>
                <td><?= h($proveedor->empresa) ?></td>
                <td><?= h($proveedor->contacto_id) ?></td>
                <td><?= h($proveedor->rfc) ?></td>
                <td><?= h($proveedor->tipo_id) ?></td>
                <td><?= h($proveedor->usuario_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Proveedor', 'action' => 'view', $proveedor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Proveedor', 'action' => 'edit', $proveedor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Proveedor', 'action' => 'delete', $proveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $proveedor->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
