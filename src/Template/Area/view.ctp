<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Area $area
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->id], ['confirm' => __('Are you sure you want to delete # {0}?', $area->id)]) ?> </li>
         <hr/>
        <li><?= $this->Html->link(__('List Personalplantel'), ['controller' => 'Personalplantel', 'action' => 'index']) ?></li>
        
    </ul>
</nav>
<div class="area view large-9 medium-8 columns content">
    <h3><?= h($area->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= h($area->area) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($area->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Jefe Area Id') ?></th>
            <td><?= $this->Number->format($area->jefe_area_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descripcion') ?></h4>
        <?= $this->Text->autoParagraph(h($area->descripcion)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Personalplantel') ?></h4>
        <?php if (!empty($area->personalplantel)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col"><?= __('Persona Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Taller Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($area->personalplantel as $personalplantel): ?>
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
