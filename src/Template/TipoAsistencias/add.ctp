<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\TipoAsistencia $tipoAsistencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipo Asistencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Casos'), ['controller' => 'Casos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Caso'), ['controller' => 'Casos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoAsistencias form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoAsistencia) ?>
    <fieldset>
        <legend><?= __('Add Tipo Asistencia') ?></legend>
        <?php
            echo $this->Form->control('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
