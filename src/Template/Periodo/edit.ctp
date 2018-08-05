<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodo $periodo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $periodo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Periodo'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entrada'), ['controller' => 'Entrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entrada'), ['controller' => 'Entrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Foliosalida'), ['controller' => 'Foliosalida', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Foliosalida'), ['controller' => 'Foliosalida', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="periodo form large-9 medium-8 columns content">
    <?= $this->Form->create($periodo) ?>
    <fieldset>
        <legend><?= __('Edit Periodo') ?></legend>
        <?php
            echo $this->Form->control('fecha_inicio', ['empty' => true]);
            echo $this->Form->control('fecha_fin', ['empty' => true]);
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
