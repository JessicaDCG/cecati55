<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Articulo $articulo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Articulo'), ['action' => 'edit', $articulo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Articulo'), ['action' => 'delete', $articulo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articulo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Unidad'), ['controller' => 'Unidad', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Unidad'), ['controller' => 'Unidad', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Marca'), ['controller' => 'Marca', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Marca'), ['controller' => 'Marca', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Catcategoria'), ['controller' => 'Catcategoria', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catcategorium'), ['controller' => 'Catcategoria', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articuloorganizacion'), ['controller' => 'Articuloorganizacion', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Articulosolicitado'), ['controller' => 'Articulosolicitado', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Controlexistencias'), ['controller' => 'Controlexistencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Controlexistencia'), ['controller' => 'Controlexistencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entrada'), ['controller' => 'Entrada', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entrada'), ['controller' => 'Entrada', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Existenciames'), ['controller' => 'Existenciames', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Existenciame'), ['controller' => 'Existenciames', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Maximominimo'), ['controller' => 'Maximominimo', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Maximominimo'), ['controller' => 'Maximominimo', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Salida'), ['controller' => 'Salida', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Salida'), ['controller' => 'Salida', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Solicitudesproveedor'), ['controller' => 'Solicitudesproveedor', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articulo view large-9 medium-8 columns content">
    <h3><?= h($articulo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($articulo->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Clave Articulo') ?></th>
            <td><?= h($articulo->clave_articulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unidad') ?></th>
            <td><?= $articulo->has('unidad') ? $this->Html->link($articulo->unidad->id, ['controller' => 'Unidad', 'action' => 'view', $articulo->unidad->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= $articulo->has('marca') ? $this->Html->link($articulo->marca->id, ['controller' => 'Marca', 'action' => 'view', $articulo->marca->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catcategorium') ?></th>
            <td><?= $articulo->has('catcategorium') ? $this->Html->link($articulo->catcategorium->id, ['controller' => 'Catcategoria', 'action' => 'view', $articulo->catcategorium->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($articulo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stock') ?></th>
            <td><?= $this->Number->format($articulo->stock) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($articulo->descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Articuloorganizacion') ?></h4>
        <?php if (!empty($articulo->articuloorganizacion)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('Estante Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($articulo->articuloorganizacion as $articuloorganizacion): ?>
            <tr>
                <td><?= h($articuloorganizacion->id) ?></td>
                <td><?= h($articuloorganizacion->articulo_id) ?></td>
                <td><?= h($articuloorganizacion->estante_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articuloorganizacion', 'action' => 'view', $articuloorganizacion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articuloorganizacion', 'action' => 'edit', $articuloorganizacion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articuloorganizacion', 'action' => 'delete', $articuloorganizacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articuloorganizacion->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Articulosolicitado') ?></h4>
        <?php if (!empty($articulo->articulosolicitado)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('Requisicion Id') ?></th>
                <th scope="col"><?= __('Proveedor Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Fecha Termino') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Precio') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($articulo->articulosolicitado as $articulosolicitado): ?>
            <tr>
                <td><?= h($articulosolicitado->id) ?></td>
                <td><?= h($articulosolicitado->articulo_id) ?></td>
                <td><?= h($articulosolicitado->requisicion_id) ?></td>
                <td><?= h($articulosolicitado->proveedor_id) ?></td>
                <td><?= h($articulosolicitado->fecha) ?></td>
                <td><?= h($articulosolicitado->fecha_termino) ?></td>
                <td><?= h($articulosolicitado->cantidad) ?></td>
                <td><?= h($articulosolicitado->precio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Articulosolicitado', 'action' => 'view', $articulosolicitado->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Articulosolicitado', 'action' => 'edit', $articulosolicitado->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Articulosolicitado', 'action' => 'delete', $articulosolicitado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $articulosolicitado->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Controlexistencias') ?></h4>
        <?php if (!empty($articulo->controlexistencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('Costo Medio') ?></th>
                <th scope="col"><?= __('Debe') ?></th>
                <th scope="col"><?= __('Haber') ?></th>
                <th scope="col"><?= __('Saldo') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($articulo->controlexistencias as $controlexistencias): ?>
            <tr>
                <td><?= h($controlexistencias->id) ?></td>
                <td><?= h($controlexistencias->articulo_id) ?></td>
                <td><?= h($controlexistencias->costo_medio) ?></td>
                <td><?= h($controlexistencias->debe) ?></td>
                <td><?= h($controlexistencias->haber) ?></td>
                <td><?= h($controlexistencias->saldo) ?></td>
                <td><?= h($controlexistencias->fecha) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Controlexistencias', 'action' => 'view', $controlexistencias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Controlexistencias', 'action' => 'edit', $controlexistencias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Controlexistencias', 'action' => 'delete', $controlexistencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $controlexistencias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Entrada') ?></h4>
        <?php if (!empty($articulo->entrada)): ?>
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
            <?php foreach ($articulo->entrada as $entrada): ?>
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
        <h4><?= __('Related Existenciames') ?></h4>
        <?php if (!empty($articulo->existenciames)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Inicio') ?></th>
                <th scope="col"><?= __('Fin') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($articulo->existenciames as $existenciames): ?>
            <tr>
                <td><?= h($existenciames->id) ?></td>
                <td><?= h($existenciames->inicio) ?></td>
                <td><?= h($existenciames->fin) ?></td>
                <td><?= h($existenciames->articulo_id) ?></td>
                <td><?= h($existenciames->fecha) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Existenciames', 'action' => 'view', $existenciames->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Existenciames', 'action' => 'edit', $existenciames->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Existenciames', 'action' => 'delete', $existenciames->id], ['confirm' => __('Are you sure you want to delete # {0}?', $existenciames->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Maximominimo') ?></h4>
        <?php if (!empty($articulo->maximominimo)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('Consumo Mensual') ?></th>
                <th scope="col"><?= __('Minimo') ?></th>
                <th scope="col"><?= __('Maximo') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($articulo->maximominimo as $maximominimo): ?>
            <tr>
                <td><?= h($maximominimo->id) ?></td>
                <td><?= h($maximominimo->articulo_id) ?></td>
                <td><?= h($maximominimo->consumo_mensual) ?></td>
                <td><?= h($maximominimo->minimo) ?></td>
                <td><?= h($maximominimo->maximo) ?></td>
                <td><?= h($maximominimo->fecha) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Maximominimo', 'action' => 'view', $maximominimo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Maximominimo', 'action' => 'edit', $maximominimo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Maximominimo', 'action' => 'delete', $maximominimo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maximominimo->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Salida') ?></h4>
        <?php if (!empty($articulo->salida)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Solicitante Id') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Fecha') ?></th>
                <th scope="col"><?= __('Autorizacion') ?></th>
                <th scope="col"><?= __('Condicion Id') ?></th>
                <th scope="col"><?= __('Fecha Devolucion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($articulo->salida as $salida): ?>
            <tr>
                <td><?= h($salida->id) ?></td>
                <td><?= h($salida->solicitante_id) ?></td>
                <td><?= h($salida->articulo_id) ?></td>
                <td><?= h($salida->cantidad) ?></td>
                <td><?= h($salida->fecha) ?></td>
                <td><?= h($salida->autorizacion) ?></td>
                <td><?= h($salida->condicion_id) ?></td>
                <td><?= h($salida->fecha_devolucion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Salida', 'action' => 'view', $salida->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Salida', 'action' => 'edit', $salida->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Salida', 'action' => 'delete', $salida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $salida->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Solicitudesproveedor') ?></h4>
        <?php if (!empty($articulo->solicitudesproveedor)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Articulo Id') ?></th>
                <th scope="col"><?= __('Cantidad') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Proveedor Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($articulo->solicitudesproveedor as $solicitudesproveedor): ?>
            <tr>
                <td><?= h($solicitudesproveedor->id) ?></td>
                <td><?= h($solicitudesproveedor->articulo_id) ?></td>
                <td><?= h($solicitudesproveedor->cantidad) ?></td>
                <td><?= h($solicitudesproveedor->status) ?></td>
                <td><?= h($solicitudesproveedor->proveedor_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Solicitudesproveedor', 'action' => 'view', $solicitudesproveedor->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Solicitudesproveedor', 'action' => 'edit', $solicitudesproveedor->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Solicitudesproveedor', 'action' => 'delete', $solicitudesproveedor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitudesproveedor->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
