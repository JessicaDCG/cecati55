<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Persona'), ['action' => 'edit', $persona->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Persona'), ['action' => 'delete', $persona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Persona'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['action' => 'add']) ?> </li>

        <!--
        <li><?= $this->Html->link(__('List Contacto'), ['controller' => 'Contacto', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contacto'), ['controller' => 'Contacto', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sexo'), ['controller' => 'Sexo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sexo'), ['controller' => 'Sexo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alumno'), ['controller' => 'Alumno', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumno', 'action' => 'add']) ?> </li>
        -->

        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="persona view large-9 medium-8 columns content">
    <h3><?= h($persona->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($persona->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Paterno') ?></th>
            <td><?= h($persona->apellido_paterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellido Materno') ?></th>
            <td><?= h($persona->apellido_materno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contacto') ?></th>
            <td><?= $persona->has('contacto') ? $this->Html->link($persona->contacto->id, ['controller' => 'Contacto', 'action' => 'view', $persona->contacto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sexo') ?></th>
            <td><?= $persona->has('sexo') ? $this->Html->link($persona->sexo->id, ['controller' => 'Sexo', 'action' => 'view', $persona->sexo->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($persona->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($persona->fecha_nacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recha Registro') ?></th>
            <td><?= h($persona->recha_registro) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Alumno') ?></h4>
        <?php if (!empty($persona->alumno)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Persona Id') ?></th>
                <th scope="col"><?= __('Estudios Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($persona->alumno as $alumno): ?>
            <tr>
                <td><?= h($alumno->id) ?></td>
                <td><?= h($alumno->persona_id) ?></td>
                <td><?= h($alumno->estudios_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Alumno', 'action' => 'view', $alumno->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Alumno', 'action' => 'edit', $alumno->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Alumno', 'action' => 'delete', $alumno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumno->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Personalplantel') ?></h4>
        <?php if (!empty($persona->personalplantel)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col"><?= __('Persona Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Taller Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($persona->personalplantel as $personalplantel): ?>
            <tr>
                <td><?= h($personalplantel->id) ?></td>
                <td><?= h($personalplantel->area_id) ?></td>
                <td><?= h($personalplantel->persona_id) ?></td>
                <td><?= h($personalplantel->usuario_id) ?></td>
                <td><?= h($personalplantel->taller_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Personalplantel', 'action' => 'view', $personalplantel->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Personalplantel', 'action' => 'edit', $personalplantel->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Personalplantel', 'action' => 'delete', $personalplantel->id], ['confirm' => __('Are you sure you want to delete # {0}?', $personalplantel->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
