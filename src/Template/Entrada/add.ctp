<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entrada $entrada
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Entrada'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipoentrada'), ['controller' => 'Tipoentrada', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipoentrada'), ['controller' => 'Tipoentrada', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Condicion'), ['controller' => 'Condicion', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Condicion'), ['controller' => 'Condicion', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodo'), ['controller' => 'Periodo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodo'), ['controller' => 'Periodo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entrada form large-9 medium-8 columns content">
    <?= $this->Form->create($entrada) ?>
    <fieldset>
        <legend><?= __('Add Entrada') ?></legend>
        <?php
            echo $this->Form->control('folio');
            echo $this->Form->control('articulo_id', ['options' => $articulo, 'empty' => true]);
            echo $this->Form->control('tipoEntrada_id', ['options' => $tipoentrada, 'empty' => true]);
            echo $this->Form->control('cantidad');
            echo $this->Form->control('precio');
            echo $this->Form->control('condicion_id', ['options' => $condicion, 'empty' => true]);
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('periodo_id', ['options' => $periodo, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
