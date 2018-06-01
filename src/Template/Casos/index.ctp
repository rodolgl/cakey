<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caso[]|\Cake\Collection\CollectionInterface $casos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Caso'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Asistencias'), ['controller' => 'TipoAsistencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Asistencia'), ['controller' => 'TipoAsistencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gravedades'), ['controller' => 'Gravedades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gravedad'), ['controller' => 'Gravedades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="casos index large-9 medium-8 columns content">
    <h3><?= __('Casos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('empresa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_asistencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gravedad_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('usuario_departamento_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_caso') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tiempo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('si_solucionado') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($casos as $caso): ?>
            <tr>
                <td><?= $this->Number->format($caso->id) ?></td>
                <td><?= $caso->has('empresa') ? $this->Html->link($caso->empresa->nombre_corto, ['controller' => 'Empresas', 'action' => 'view', $caso->empresa->id]) : '' ?></td>
                <td><?= $caso->has('tipo_asistencia') ? $this->Html->link($caso->tipo_asistencia->id, ['controller' => 'TipoAsistencias', 'action' => 'view', $caso->tipo_asistencia->id]) : '' ?></td>
                <td><?= $caso->has('gravedad') ? $this->Html->link($caso->gravedad->nivel, ['controller' => 'Gravedades', 'action' => 'view', $caso->gravedad->id]) : '' ?></td>
                <td><?= $this->Number->format($caso->usuario_id) ?></td>
                <td><?= $caso->has('usuario') ? $this->Html->link($caso->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $caso->usuario->id]) : '' ?></td>
                <td><?= h($caso->num_caso) ?></td>
                <td><?= $this->Number->format($caso->tiempo) ?></td>
                <td><?= h($caso->si_solucionado) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $caso->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caso->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caso->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
