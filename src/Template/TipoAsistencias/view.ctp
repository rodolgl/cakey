<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoAsistencia $tipoAsistencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Asistencia'), ['action' => 'edit', $tipoAsistencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Asistencia'), ['action' => 'delete', $tipoAsistencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoAsistencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Asistencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Asistencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Casos'), ['controller' => 'Casos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caso'), ['controller' => 'Casos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoAsistencias view large-9 medium-8 columns content">
    <h3><?= h($tipoAsistencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($tipoAsistencia->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipoAsistencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($tipoAsistencia->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($tipoAsistencia->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Casos') ?></h4>
        <?php if (!empty($tipoAsistencia->casos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Num Caso') ?></th>
                <th scope="col"><?= __('Solicitud') ?></th>
                <th scope="col"><?= __('Gravedad') ?></th>
                <th scope="col"><?= __('Empresa Id') ?></th>
                <th scope="col"><?= __('Tipo Asistencia Id') ?></th>
                <th scope="col"><?= __('Usuario Id') ?></th>
                <th scope="col"><?= __('Usuario Departamento Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                 <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
            <?php foreach ($tipoAsistencia->casos as $casos): ?>
            <tr>
                <td><?= h($casos->id) ?></td>
                <td><?= h($casos->num_caso) ?></td>
                <td><?= h($casos->solicitud) ?></td>
                <td><?= h($casos->gravedad) ?></td>
                <td><?= h($casos->empresa_id) ?></td>
                <td><?= h($casos->tipo_asistencia_id) ?></td>
                <td><?= h($casos->usuario_id) ?></td>
                <td><?= h($casos->usuario_departamento_id) ?></td>
                <td><?= h($casos->created) ?></td>
                <td><?= h($casos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Casos', 'action' => 'view', $casos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Casos', 'action' => 'edit', $casos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Casos', 'action' => 'delete', $casos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $casos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
