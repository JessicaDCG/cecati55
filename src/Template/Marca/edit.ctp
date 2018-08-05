<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca $marca
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $marca->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $marca->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Marca'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="marca form large-9 medium-8 columns content">
    <?= $this->Form->create($marca) ?>
    <fieldset>
        <legend><?= __('Edit Marca') ?></legend>
        <?php
            echo $this->Form->control('marca');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
