<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Controlexistencia $controlexistencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Controlexistencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="controlexistencias form large-9 medium-8 columns content">
    <?= $this->Form->create($controlexistencia) ?>
    <fieldset>
        <legend><?= __('Add Controlexistencia') ?></legend>
        <?php
            echo $this->Form->control('articulo_id', ['options' => $articulo, 'empty' => true]);
            echo $this->Form->control('costo_medio');
            echo $this->Form->control('debe');
            echo $this->Form->control('haber');
            echo $this->Form->control('saldo');
            echo $this->Form->control('fecha', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
