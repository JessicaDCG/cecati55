<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contacto[]|\Cake\Collection\CollectionInterface $contacto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Direccion'), ['controller' => 'Direccion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Direccion'), ['controller' => 'Direccion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Persona', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contacto index large-9 medium-8 columns content">
    <h3><?= __('Contacto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('direccion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono_uno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telefono_dos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacto as $contacto): ?>
            <tr>
                <td><?= $this->Number->format($contacto->id) ?></td>
                <td><?= h($contacto->correo) ?></td>
                <td><?= $contacto->has('direccion') ? $this->Html->link($contacto->direccion->id, ['controller' => 'Direccion', 'action' => 'view', $contacto->direccion->id]) : '' ?></td>
                <td><?= h($contacto->telefono_uno) ?></td>
                <td><?= h($contacto->telefono_dos) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contacto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contacto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contacto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contacto->id)]) ?>
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
