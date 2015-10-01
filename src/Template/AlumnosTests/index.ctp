<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Alumnos Test'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="alumnosTests index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('alumno_id') ?></th>
            <th><?= $this->Paginator->sort('test_id') ?></th>
            <th><?= $this->Paginator->sort('fecha') ?></th>
            <th><?= $this->Paginator->sort('estado') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($alumnosTests as $alumnosTest): ?>
        <tr>
            <td><?= $this->Number->format($alumnosTest->id) ?></td>
            <td>
                <?= $alumnosTest->has('alumno') ? $this->Html->link($alumnosTest->alumno->id, ['controller' => 'Alumnos', 'action' => 'view', $alumnosTest->alumno->id]) : '' ?>
            </td>
            <td>
                <?= $alumnosTest->has('test') ? $this->Html->link($alumnosTest->test->id, ['controller' => 'Tests', 'action' => 'view', $alumnosTest->test->id]) : '' ?>
            </td>
            <td><?= h($alumnosTest->fecha) ?></td>
            <td><?= h($alumnosTest->estado) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $alumnosTest->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alumnosTest->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alumnosTest->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alumnosTest->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
