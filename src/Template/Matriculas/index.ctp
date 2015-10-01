<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Matricula'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grados'), ['controller' => 'Grados', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grado'), ['controller' => 'Grados', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Aniolectivos'), ['controller' => 'Aniolectivos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aniolectivo'), ['controller' => 'Aniolectivos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alumnos'), ['controller' => 'Alumnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Alumno'), ['controller' => 'Alumnos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="matriculas index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('grado_id') ?></th>
            <th><?= $this->Paginator->sort('aniolectivo_id') ?></th>
            <th><?= $this->Paginator->sort('alumno_id') ?></th>
            <th><?= $this->Paginator->sort('fecha') ?></th>
            <th><?= $this->Paginator->sort('estado') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($matriculas as $matricula): ?>
        <tr>
            <td><?= $this->Number->format($matricula->id) ?></td>
            <td>
                <?= $matricula->has('grado') ? $this->Html->link($matricula->grado->id, ['controller' => 'Grados', 'action' => 'view', $matricula->grado->id]) : '' ?>
            </td>
            <td>
                <?= $matricula->has('aniolectivo') ? $this->Html->link($matricula->aniolectivo->id, ['controller' => 'Aniolectivos', 'action' => 'view', $matricula->aniolectivo->id]) : '' ?>
            </td>
            <td>
                <?= $matricula->has('alumno') ? $this->Html->link($matricula->alumno->id, ['controller' => 'Alumnos', 'action' => 'view', $matricula->alumno->id]) : '' ?>
            </td>
            <td><?= h($matricula->fecha) ?></td>
            <td><?= h($matricula->estado) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $matricula->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $matricula->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $matricula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matricula->id)]) ?>
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
