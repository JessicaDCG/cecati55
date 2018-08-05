<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Curso'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodo'), ['controller' => 'Periodo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requisicion'), ['controller' => 'Requisicion', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requisicion'), ['controller' => 'Requisicion', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="curso view large-9 medium-8 columns content">
    <h3><?= h($curso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($curso->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodo') ?></th>
            <td><?= $curso->has('periodo') ? $this->Html->link($curso->periodo->id, ['controller' => 'Periodo', 'action' => 'view', $curso->periodo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personalplantel') ?></th>
            <td><?= $curso->has('personalplantel') ? $this->Html->link($curso->personalplantel->id, ['controller' => 'Personalplantel', 'action' => 'view', $curso->personalplantel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($curso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($curso->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha FFIn') ?></th>
            <td><?= h($curso->fecha_fFIn) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($curso->descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Requisicion') ?></h4>
        <?php if (!empty($curso->requisicion)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Solicitante Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Curso Id') ?></th>
                <th scope="col"><?= __('Justificacion') ?></th>
                <th scope="col"><?= __('Folio') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($curso->requisicion as $requisicion): ?>
            <tr>
                <td><?= h($requisicion->id) ?></td>
                <td><?= h($requisicion->solicitante_id) ?></td>
                <td><?= h($requisicion->fecha) ?></td>
                <td><?= h($requisicion->curso_id) ?></td>
                <td><?= h($requisicion->justificacion) ?></td>
                <td><?= h($requisicion->folio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Requisicion', 'action' => 'view', $requisicion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Requisicion', 'action' => 'edit', $requisicion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Requisicion', 'action' => 'delete', $requisicion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisicion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
