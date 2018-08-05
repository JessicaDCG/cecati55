<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Taller $taller
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $taller->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $taller->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Taller'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="taller form large-9 medium-8 columns content">
    <?= $this->Form->create($taller) ?>
    <fieldset>
        <legend><?= __('Edit Taller') ?></legend>
        <?php
            echo $this->Form->control('taller');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
