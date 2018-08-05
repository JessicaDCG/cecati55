<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Area $area
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Area'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="area form large-9 medium-8 columns content">
    <?= $this->Form->create($area) ?>
    <fieldset>
        <legend><?= __('Add Area') ?></legend>
        <?php
            echo $this->Form->control('area');
            echo $this->Form->control('descripcion');
            //echo $this->Form->control('jefe_area_id');
            echo $this->Form->input('jefe_area_id', array(
                'type'    => 'select',
                'options' => $ArrayJefes,
                'empty' => 'Selecciona al jefe de area',
                'label' => 'Jefe'
            ));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
