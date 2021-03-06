<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caso $caso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Caso'), ['action' => 'edit', $caso->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Caso'), ['action' => 'delete', $caso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caso->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Casos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Caso'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Asistencias'), ['controller' => 'TipoAsistencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Asistencia'), ['controller' => 'TipoAsistencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gravedades'), ['controller' => 'Gravedades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gravedad'), ['controller' => 'Gravedades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="casos view large-9 medium-8 columns content">
    <h3><?= h($caso->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $caso->has('empresa') ? $this->Html->link($caso->empresa->nombre_corto, ['controller' => 'Empresas', 'action' => 'view', $caso->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Asistencia') ?></th>
            <td><?= $caso->has('tipo_asistencia') ? $this->Html->link($caso->tipo_asistencia->id, ['controller' => 'TipoAsistencias', 'action' => 'view', $caso->tipo_asistencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gravedad') ?></th>
            <td><?= $caso->has('gravedad') ? $this->Html->link($caso->gravedad->nivel, ['controller' => 'Gravedades', 'action' => 'view', $caso->gravedad->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= $caso->has('usuario') ? $this->Html->link($caso->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $caso->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Caso') ?></th>
            <td><?= h($caso->num_caso) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($caso->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Id') ?></th>
            <td><?= $this->Number->format($caso->usuario_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiempo') ?></th>
            <td><?= $this->Number->format($caso->tiempo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($caso->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($caso->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Si Solucionado') ?></th>
            <td><?= $caso->si_solucionado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Solicitud') ?></h4>
        <?= $this->Text->autoParagraph(h($caso->solicitud)); ?>
    </div>
    <div class="row">
        <h4><?= __('Observaciones') ?></h4>
        <?= $this->Text->autoParagraph(h($caso->observaciones)); ?>
    </div>
</div>
