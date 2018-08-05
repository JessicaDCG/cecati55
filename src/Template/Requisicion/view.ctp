<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisicion $requisicion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Requisicion'), ['action' => 'edit', $requisicion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Requisicion'), ['action' => 'delete', $requisicion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $requisicion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Requisicion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Requisicion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="requisicion view large-9 medium-8 columns content">
    <h3><?= h($requisicion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Personalplantel') ?></th>
            <td><?= $requisicion->has('personalplantel') ? $this->Html->link($requisicion->personalplantel->id, ['controller' => 'Personalplantel', 'action' => 'view', $requisicion->personalplantel->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Curso') ?></th>
            <td><?= $requisicion->has('curso') ? $this->Html->link($requisicion->curso->id, ['controller' => 'Curso', 'action' => 'view', $requisicion->curso->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Folio') ?></th>
            <td><?= h($requisicion->folio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($requisicion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($requisicion->fecha) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Justificacion') ?></h4>
        <?= $this->Text->autoParagraph(h($requisicion->justificacion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Articulosolicitado') ?></h4>
        <?php if (!empty($requisicion->articulosolicitado)): ?>
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
            <?php foreach ($requisicion->articulosolicitado as $articulosolicitado): ?>
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
</div>
