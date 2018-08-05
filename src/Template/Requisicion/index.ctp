<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisicion[]|\Cake\Collection\CollectionInterface $requisicion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Requisicion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requisicion index large-9 medium-8 columns content">
    <h3><?= __('Requisicion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('solicitante_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('curso_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('folio') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requisicion as $requisicion): ?>
            <tr>
                <td><?= $this->Number->format($requisicion->id) ?></td>
                <td><?= $requisicion->has('personalplantel') ? $this->Html->link($requisicion->personalplantel->id, ['controller' => 'Personalplantel', 'action' => 'view', $requisicion->personalplantel->id]) : '' ?></td>
                <td><?= h($requisicion->fecha) ?></td>
                <td><?= $requisicion->has('curso') ? $this->Html->link($requisicion->curso->id, ['controller' => 'Curso', 'action' => 'view', $requisicion->curso->id]) : '' ?></td>
                <td><?= h($requisicion->folio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $requisicion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $requisicion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $requisicion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisicion->id)]) ?>
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
