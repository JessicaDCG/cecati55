<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Direccion $direccion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Direccion'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Municipio'), ['controller' => 'Municipio', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Municipio'), ['controller' => 'Municipio', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contacto'), ['controller' => 'Contacto', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contacto', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="direccion form large-9 medium-8 columns content">
    <?= $this->Form->create($direccion) ?>
    <fieldset>
        <legend><?= __('Add Direccion') ?></legend>
        <?php
            echo $this->Form->control('calle');
            echo $this->Form->control('colonia');
            echo $this->Form->control('numero');
            echo $this->Form->control('municipio_id', ['options' => $municipio, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
