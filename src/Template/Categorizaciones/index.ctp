<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categorizacion[]|\Cake\Collection\CollectionInterface $categorizaciones
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Categorizacion'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categorizaciones index large-9 medium-8 columns content">
    <h3><?= __('Categorizaciones') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('urgencia') ?></th>
                <th scope="col"><?= $this->Paginator->sort('impacto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categorizaciones as $categorizacion): ?>
            <tr>
                <td><?= $this->Number->format($categorizacion->id) ?></td>
                <td><?= h($categorizacion->urgencia) ?></td>
                <td><?= h($categorizacion->impacto) ?></td>
                <td><?= h($categorizacion->created) ?></td>
                <td><?= h($categorizacion->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $categorizacion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $categorizacion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $categorizacion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categorizacion->id)]) ?>
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
