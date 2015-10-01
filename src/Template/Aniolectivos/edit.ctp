<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aniolectivo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aniolectivo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Aniolectivos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="aniolectivos form large-10 medium-9 columns">
    <?= $this->Form->create($aniolectivo) ?>
    <fieldset>
        <legend><?= __('Edit Aniolectivo') ?></legend>
        <?php
            echo $this->Form->input('descripcion');
            echo $this->Form->input('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
