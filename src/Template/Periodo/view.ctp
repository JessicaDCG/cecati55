<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Periodo $periodo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Periodo'), ['action' => 'edit', $periodo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Periodo'), ['action' => 'delete', $periodo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $periodo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Periodo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Curso'), ['controller' => 'Curso', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Curso', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entrada'), ['controller' => 'Entrada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entrada'), ['controller' => 'Entrada', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Foliosalida'), ['controller' => 'Foliosalida', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Foliosalida'), ['controller' => 'Foliosalida', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="periodo view large-9 medium-8 columns content">
    <h3><?= h($periodo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($periodo->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($periodo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Inicio') ?></th>
            <td><?= h($periodo->fecha_inicio) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Fin') ?></th>
            <td><?= h($periodo->fecha_fin) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Curso') ?></h4>
        <?php if (!empty($periodo->curso)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Periodo Id') ?></th>
                <th scope="col"><?= __('Personal Plantel Id') ?></th>
                <th scope="col"><?= __('Fecha Inicio') ?></th>
                <th scope="col"><?= __('Fecha FFIn') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($periodo->curso as $curso): ?>
            <tr>
                <td><?= h($curso->id) ?></td>
                <td><?= h($curso->nombre) ?></td>
                <td><?= h($curso->descripcion) ?></td>
                <td><?= h($curso->periodo_id) ?></td>
                <td><?= h($curso->personal_plantel_id) ?></td>
                <td><?= h($curso->fecha_inicio) ?></td>
                <td><?= h($curso->fecha_fFIn) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Curso', 'action' => 'view', $curso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Curso', 'action' => 'edit', $curso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Curso', 'action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Entrada') ?></h4>
        <?php if (!empty($periodo->entrada)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Folio') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('TipoEntrada Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col"><?= __('Condicion Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Periodo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($periodo->entrada as $entrada): ?>
            <tr>
                <td><?= h($entrada->id) ?></td>
                <td><?= h($entrada->folio) ?></td>
                <td><?= h($entrada->articulo_id) ?></td>
                <td><?= h($entrada->tipoEntrada_id) ?></td>
                <td><?= h($entrada->cantidad) ?></td>
                <td><?= h($entrada->precio) ?></td>
                <td><?= h($entrada->condicion_id) ?></td>
                <td><?= h($entrada->fecha) ?></td>
                <td><?= h($entrada->periodo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Entrada', 'action' => 'view', $entrada->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Entrada', 'action' => 'edit', $entrada->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entrada', 'action' => 'delete', $entrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrada->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Foliosalida') ?></h4>
        <?php if (!empty($periodo->foliosalida)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Folio Herramienta') ?></th>
                <th scope="col"><?= __('Folio Consumo') ?></th>
                <th scope="col"><?= __('Folio Activo Fijo') ?></th>
                <th scope="col"><?= __('Periodo Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($periodo->foliosalida as $foliosalida): ?>
            <tr>
                <td><?= h($foliosalida->id) ?></td>
                <td><?= h($foliosalida->folio_herramienta) ?></td>
                <td><?= h($foliosalida->folio_consumo) ?></td>
                <td><?= h($foliosalida->folio_activo_fijo) ?></td>
                <td><?= h($foliosalida->periodo_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Foliosalida', 'action' => 'view', $foliosalida->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Foliosalida', 'action' => 'edit', $foliosalida->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Foliosalida', 'action' => 'delete', $foliosalida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $foliosalida->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
