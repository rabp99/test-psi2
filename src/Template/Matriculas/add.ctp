<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Matriculas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grados'), ['controller' => 'Grados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grado'), ['controller' => 'Grados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aniolectivos'), ['controller' => 'Aniolectivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aniolectivo'), ['controller' => 'Aniolectivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="matriculas form large-10 medium-9 columns">
    <?= $this->Form->create($matricula) ?>
    <fieldset>
        <legend><?= __('Add Matricula') ?></legend>
        <?php
            echo $this->Form->input('fecha');
            echo $this->Form->input('estado');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
