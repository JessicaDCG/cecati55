<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personalplantel[]|\Cake\Collection\CollectionInterface $personalplantel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['action' => 'add']) ?></li>

        <hr />

        <li><?= $this->Html->link(__('List Area'), ['controller' => 'Area', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Taller'), ['controller' => 'Taller', 'action' => 'index']) ?></li>

    <!--
        
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Area', 'action' => 'add']) ?></li>
        
        
        <li><?= $this->Html->link(__('New Persona'), ['controller' => 'Persona', 'action' => 'add']) ?></li>
        
        
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuario', 'action' => 'add']) ?></li>
        
        
        <li><?= $this->Html->link(__('New Taller'), ['controller' => 'Taller', 'action' => 'add']) ?></li>
    -->
    </ul>
</nav>
<div class="personalplantel index large-9 medium-8 columns content">
    <h3><?= __('Personalplantel') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('persona_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('taller_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($personalplantel as $personalplantel): ?>
            <tr>
                <td><?= $this->Number->format($personalplantel->id) ?></td>
                <td><?= $personalplantel->has('area') ? $this->Html->link($personalplantel->area->id, ['controller' => 'Area', 'action' => 'view', $personalplantel->area->id]) : '' ?></td>
                <td><?= $personalplantel->has('persona') ? $this->Html->link($personalplantel->persona->id, ['controller' => 'Persona', 'action' => 'view', $personalplantel->persona->id]) : '' ?></td>
                <td><?= $personalplantel->has('usuario') ? $this->Html->link($personalplantel->usuario->id, ['controller' => 'Usuario', 'action' => 'view', $personalplantel->usuario->id]) : '' ?></td>
                <td><?= $personalplantel->has('taller') ? $this->Html->link($personalplantel->taller->id, ['controller' => 'Taller', 'action' => 'view', $personalplantel->taller->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $personalplantel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $personalplantel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $personalplantel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personalplantel->id)]) ?>
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
