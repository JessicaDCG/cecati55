<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Requisicion $requisicion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $requisicion->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $requisicion->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Requisicion'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requisicion form large-9 medium-8 columns content">
    <?= $this->Form->create($requisicion) ?>
    <fieldset>
        <legend><?= __('Edit Requisicion') ?></legend>
        <?php
            echo $this->Form->control('solicitante_id', ['options' => $personalplantel, 'empty' => true]);
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('curso_id', ['options' => $curso, 'empty' => true]);
            echo $this->Form->control('justificacion');
            echo $this->Form->control('folio');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
