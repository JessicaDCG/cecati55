<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona[]|\Cake\Collection\CollectionInterface $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Persona'), ['action' => 'add']) ?></li>
        
<!--
        <li><?= $this->Html->link(__('List Contacto'), ['controller' => 'Contacto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contacto', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sexo'), ['controller' => 'Sexo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sexo'), ['controller' => 'Sexo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumno'), ['controller' => 'Alumno', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumno', 'action' => 'add']) ?></li>

-->
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persona index large-9 medium-8 columns content">
    <h3><?= __('Persona') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_paterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('apellido_materno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_nacimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recha_registro') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contacto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sexo_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persona as $persona): ?>
            <tr>
                <td><?= $this->Number->format($persona->id) ?></td>
                <td><?= h($persona->nombre) ?></td>
                <td><?= h($persona->apellido_paterno) ?></td>
                <td><?= h($persona->apellido_materno) ?></td>
                <td><?= h($persona->fecha_nacimiento) ?></td>
                <td><?= h($persona->recha_registro) ?></td>
                <td><?= $persona->has('contacto') ? $this->Html->link($persona->contacto->id, ['controller' => 'Contacto', 'action' => 'view', $persona->contacto->id]) : '' ?></td>
                <td><?= $persona->has('sexo') ? $this->Html->link($persona->sexo->id, ['controller' => 'Sexo', 'action' => 'view', $persona->sexo->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $persona->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $persona->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $persona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]) ?>
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
