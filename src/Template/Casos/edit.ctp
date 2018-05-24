<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caso $caso
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $caso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $caso->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Casos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Empresas'), ['controller' => 'Empresas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Empresa'), ['controller' => 'Empresas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Asistencias'), ['controller' => 'TipoAsistencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Asistencia'), ['controller' => 'TipoAsistencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="casos form large-9 medium-8 columns content">
    <?= $this->Form->create($caso) ?>
    <fieldset>
        <legend><?= __('Edit Caso') ?></legend>
        <?php
            echo $this->Form->control('num_caso');
            echo $this->Form->control('solicitud');
            echo $this->Form->control('gravedad');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Enviar')) ?>
    <?= $this->Form->end() ?>
</div>
