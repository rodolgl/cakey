<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caso $caso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Casos'), ['action' => 'index']) ?></li>
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
<div class="casos form large-9 medium-8 columns content">
    <?= $this->Form->create($caso) ?>
    <fieldset>
        <legend><?= __('Add Caso') ?></legend>
        <?php
            echo $this->Form->control('num_caso');
            echo $this->Form->control('empresa_id', [
                'options' => $empresas,
                'empty' => 'Seleccione'
            ]);
            echo $this->Form->control('solicitud');
            echo $this->Form->control('gravedad_id', [
                'options' => $gravedades,
                'empty' => 'Seleccione']);
            echo $this->Form->control('tipo_asistencia_id', [
                'options' => $tipoAsistencias,
                'empty' => 'Seleccione'
            ]);
            echo $this->Form->control('observaciones');
            echo $this->Form->control('si_solucionado');
            echo $this->Form->control('tiempo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
