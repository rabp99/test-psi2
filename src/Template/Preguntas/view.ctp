<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Pregunta'), ['action' => 'edit', $pregunta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pregunta'), ['action' => 'delete', $pregunta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pregunta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Preguntas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pregunta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="preguntas view large-10 medium-9 columns">
    <h2><?= h($pregunta->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Test') ?></h6>
            <p><?= $pregunta->has('test') ? $this->Html->link($pregunta->test->id, ['controller' => 'Tests', 'action' => 'view', $pregunta->test->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Descripcion') ?></h6>
            <p><?= h($pregunta->descripcion) ?></p>
            <h6 class="subheader"><?= __('Estado') ?></h6>
            <p><?= h($pregunta->estado) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($pregunta->id) ?></p>
        </div>
    </div>
</div>
