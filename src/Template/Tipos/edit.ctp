<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="tipos form large-10 medium-9 columns">
    <?= $this->Form->create($tipo) ?>
    <fieldset>
        <legend><?= __('Edit Tipo') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
            echo $this->Form->input('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
