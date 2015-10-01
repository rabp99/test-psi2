<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Alumnos Test'), ['action' => 'edit', $alumnosTest->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alumnos Test'), ['action' => 'delete', $alumnosTest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnosTest->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos Tests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumnos Test'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="alumnosTests view large-10 medium-9 columns">
    <h2><?= h($alumnosTest->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Alumno') ?></h6>
            <p><?= $alumnosTest->has('alumno') ? $this->Html->link($alumnosTest->alumno->id, ['controller' => 'Alumnos', 'action' => 'view', $alumnosTest->alumno->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Test') ?></h6>
            <p><?= $alumnosTest->has('test') ? $this->Html->link($alumnosTest->test->id, ['controller' => 'Tests', 'action' => 'view', $alumnosTest->test->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Estado') ?></h6>
            <p><?= h($alumnosTest->estado) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($alumnosTest->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Fecha') ?></h6>
            <p><?= h($alumnosTest->fecha) ?></p>
        </div>
    </div>
</div>
