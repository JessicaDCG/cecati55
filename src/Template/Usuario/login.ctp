<?php
/**
 * @var \App\Model\Entity\Usuario $usuario
 */
?>
<div class="usuario form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create('usuario') ?>
    <fieldset>
        <legend><?= __('Por favor introduce tu usuario y contraseña') ?></legend>
        <?= $this->Form->control('usuario') ?>
        <?= $this->Form->control('contraseña') ?>
    </fieldset>
<?= $this->Form->button(__('login')); ?>
<?= $this->Form->end() ?>
</div>