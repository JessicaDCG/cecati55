<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articuloorganizacion $articuloorganizacion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $articuloorganizacion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $articuloorganizacion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Articuloorganizacion'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estante'), ['controller' => 'Estante', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estante'), ['controller' => 'Estante', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articuloorganizacion form large-9 medium-8 columns content">
    <?= $this->Form->create($articuloorganizacion) ?>
    <fieldset>
        <legend><?= __('Edit Articuloorganizacion') ?></legend>
        <?php
            echo $this->Form->control('articulo_id', ['options' => $articulo, 'empty' => true]);
            echo $this->Form->control('estante_id', ['options' => $estante, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
