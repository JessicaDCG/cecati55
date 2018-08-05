<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuario view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($usuario->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contraseña') ?></th>
            <td><?= h($usuario->contraseña) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Personalplantel') ?></h4>
        <?php if (!empty($usuario->personalplantel)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col"><?= __('Persona Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Taller Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($usuario->personalplantel as $personalplantel): ?>
            <tr>
                <td><?= h($personalplantel->id) ?></td>
                <td><?= h($personalplantel->area_id) ?></td>
                <td><?= h($personalplantel->persona_id) ?></td>
                <td><?= h($personalplantel->usuario_id) ?></td>
                <td><?= h($personalplantel->taller_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Personalplantel', 'action' => 'view', $personalplantel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Personalplantel', 'action' => 'edit', $personalplantel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Personalplantel', 'action' => 'delete', $personalplantel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personalplantel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Proveedor') ?></h4>
        <?php if (!empty($usuario->proveedor)): ?>
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
            <?php foreach ($usuario->proveedor as $proveedor): ?>
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
