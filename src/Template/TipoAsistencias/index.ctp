<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoAsistencia[]|\Cake\Collection\CollectionInterface $tipoAsistencias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipo Asistencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Casos'), ['controller' => 'Casos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Caso'), ['controller' => 'Casos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoAsistencias index large-9 medium-8 columns content">
    <h3><?= __('Tipo Asistencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoAsistencias as $tipoAsistencia): ?>
            <tr>
                <td><?= $this->Number->format($tipoAsistencia->id) ?></td>
                <td><?= h($tipoAsistencia->nombre) ?></td>
                <td><?= h($tipoAsistencia->created) ?></td>
                <td><?= h($tipoAsistencia->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoAsistencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoAsistencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoAsistencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoAsistencia->id)]) ?>
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
