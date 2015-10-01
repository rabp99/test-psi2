<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Matricula'), ['action' => 'edit', $matricula->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Matricula'), ['action' => 'delete', $matricula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matricula->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Matriculas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matricula'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grados'), ['controller' => 'Grados', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grado'), ['controller' => 'Grados', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Aniolectivos'), ['controller' => 'Aniolectivos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aniolectivo'), ['controller' => 'Aniolectivos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="matriculas view large-10 medium-9 columns">
    <h2><?= h($matricula->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Grado') ?></h6>
            <p><?= $matricula->has('grado') ? $this->Html->link($matricula->grado->id, ['controller' => 'Grados', 'action' => 'view', $matricula->grado->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Aniolectivo') ?></h6>
            <p><?= $matricula->has('aniolectivo') ? $this->Html->link($matricula->aniolectivo->id, ['controller' => 'Aniolectivos', 'action' => 'view', $matricula->aniolectivo->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Alumno') ?></h6>
            <p><?= $matricula->has('alumno') ? $this->Html->link($matricula->alumno->id, ['controller' => 'Alumnos', 'action' => 'view', $matricula->alumno->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Estado') ?></h6>
            <p><?= h($matricula->estado) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($matricula->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Fecha') ?></h6>
            <p><?= h($matricula->fecha) ?></p>
        </div>
    </div>
</div>
