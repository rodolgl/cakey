<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contrato $contrato
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Edit Contrato'), ['action' => 'edit', $contrato->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contrato'), ['action' => 'delete', $contrato->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contrato->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contratos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contrato'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contratos view large-9 medium-8 columns content">
    <h3><?= h($contrato->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Empresa') ?></th>
            <td><?= $contrato->has('empresa') ? $this->Html->link($contrato->empresa->id, ['controller' => 'Empresas', 'action' => 'view', $contrato->empresa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiempo Sat Remoto') ?></th>
            <td><?= h($contrato->tiempo_sat_remoto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tiempo Sat Insitu') ?></th>
            <td><?= h($contrato->tiempo_sat_insitu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contrato->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contrato->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contrato->modified) ?></td>
        </tr>
    </table>
</div>
