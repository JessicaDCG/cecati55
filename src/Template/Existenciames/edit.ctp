<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Existenciame $existenciame
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $existenciame->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $existenciame->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Existenciames'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Articulo'), ['controller' => 'Articulo', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulo'), ['controller' => 'Articulo', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="existenciames form large-9 medium-8 columns content">
    <?= $this->Form->create($existenciame) ?>
    <fieldset>
        <legend><?= __('Edit Existenciame') ?></legend>
        <?php
            echo $this->Form->control('inicio');
            echo $this->Form->control('fin');
            echo $this->Form->control('articulo_id', ['options' => $articulo, 'empty' => true]);
            echo $this->Form->control('fecha', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
