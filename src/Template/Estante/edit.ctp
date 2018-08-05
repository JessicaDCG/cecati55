<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estante $estante
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estante->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estante->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estante'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estante form large-9 medium-8 columns content">
    <?= $this->Form->create($estante) ?>
    <fieldset>
        <legend><?= __('Edit Estante') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
