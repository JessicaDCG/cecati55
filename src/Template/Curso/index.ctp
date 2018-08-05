<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso[]|\Cake\Collection\CollectionInterface $curso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodo'), ['controller' => 'Periodo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Requisicion'), ['controller' => 'Requisicion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Requisicion'), ['controller' => 'Requisicion', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="curso index large-9 medium-8 columns content">
    <h3><?= __('Curso') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('personal_plantel_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_inicio') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha_fFIn') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($curso as $curso): ?>
            <tr>
                <td><?= $this->Number->format($curso->id) ?></td>
                <td><?= h($curso->nombre) ?></td>
                <td><?= $curso->has('periodo') ? $this->Html->link($curso->periodo->id, ['controller' => 'Periodo', 'action' => 'view', $curso->periodo->id]) : '' ?></td>
                <td><?= $curso->has('personalplantel') ? $this->Html->link($curso->personalplantel->id, ['controller' => 'Personalplantel', 'action' => 'view', $curso->personalplantel->id]) : '' ?></td>
                <td><?= h($curso->fecha_inicio) ?></td>
                <td><?= h($curso->fecha_fFIn) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $curso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $curso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?>
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
