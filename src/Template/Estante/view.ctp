<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estante $estante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estante'), ['action' => 'edit', $estante->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estante'), ['action' => 'delete', $estante->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estante->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estante'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estante'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estante view large-9 medium-8 columns content">
    <h3><?= h($estante->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($estante->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estante->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Articuloorganizacion') ?></h4>
        <?php if (!empty($estante->articuloorganizacion)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('Estante Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($estante->articuloorganizacion as $articuloorganizacion): ?>
            <tr>
                <td><?= h($articuloorganizacion->id) ?></td>
                <td><?= h($articuloorganizacion->articulo_id) ?></td>
                <td><?= h($articuloorganizacion->estante_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articuloorganizacion', 'action' => 'view', $articuloorganizacion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articuloorganizacion', 'action' => 'edit', $articuloorganizacion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articuloorganizacion', 'action' => 'delete', $articuloorganizacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articuloorganizacion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
