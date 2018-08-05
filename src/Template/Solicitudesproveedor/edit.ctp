<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitudesproveedor $solicitudesproveedor
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $solicitudesproveedor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudesproveedor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Solicitudesproveedor'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proveedor'), ['controller' => 'Proveedor', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proveedor'), ['controller' => 'Proveedor', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="solicitudesproveedor form large-9 medium-8 columns content">
    <?= $this->Form->create($solicitudesproveedor) ?>
    <fieldset>
        <legend><?= __('Edit Solicitudesproveedor') ?></legend>
        <?php
            echo $this->Form->control('articulo_id', ['options' => $articulo, 'empty' => true]);
            echo $this->Form->control('cantidad');
            echo $this->Form->control('status');
            echo $this->Form->control('proveedor_id', ['options' => $proveedor, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
