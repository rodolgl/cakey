<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gravedad $gravedad
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gravedades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Casos'), ['controller' => 'Casos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Caso'), ['controller' => 'Casos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gravedades form large-9 medium-8 columns content">
    <?= $this->Form->create($gravedad) ?>
    <fieldset>
        <legend><?= __('Add Gravedad') ?></legend>
        <?php
            echo $this->Form->control('nivel');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
