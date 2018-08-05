<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Personalplantel $personalplantel
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $personalplantel->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $personalplantel->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Personalplantel'), ['action' => 'index']) ?></li>

        <hr />

        <li><?= $this->Html->link(__('List Area'), ['controller' => 'Area', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['controller' => 'Persona', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuario'), ['controller' => 'Usuario', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Taller'), ['controller' => 'Taller', 'action' => 'index']) ?></li>

    </ul>
</nav>
<div class="personalplantel form large-9 medium-8 columns content">
    <?= $this->Form->create($personalplantel) ?>
    <fieldset>
        <legend><?= __('Edit Personalplantel') ?></legend>
        <?php
            echo $this->Form->control('area_id', ['options' => $area, 'empty' => true]);
            echo $this->Form->control('persona_id', ['options' => $persona, 'empty' => true]);
            echo $this->Form->control('usuario_id', ['options' => $usuario, 'empty' => true]);
            echo $this->Form->control('taller_id', ['options' => $taller, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
