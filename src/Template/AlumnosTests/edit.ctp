<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $alumnosTest->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $alumnosTest->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Alumnos Tests'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="alumnosTests form large-10 medium-9 columns">
    <?= $this->Form->create($alumnosTest) ?>
    <fieldset>
        <legend><?= __('Edit Alumnos Test') ?></legend>
        <?php
            echo $this->Form->input('fecha');
            echo $this->Form->input('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
