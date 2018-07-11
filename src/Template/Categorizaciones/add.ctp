<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorizacion $categorizacion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Categorizaciones'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="categorizaciones form large-9 medium-8 columns content">
    <?= $this->Form->create($categorizacion) ?>
    <fieldset>
        <legend><?= __('Add Categorizacion') ?></legend>
        <?php
            echo $this->Form->control('urgencia');
            echo $this->Form->control('impacto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
