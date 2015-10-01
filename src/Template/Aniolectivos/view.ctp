<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Aniolectivo'), ['action' => 'edit', $aniolectivo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aniolectivo'), ['action' => 'delete', $aniolectivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aniolectivo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aniolectivos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aniolectivo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="aniolectivos view large-10 medium-9 columns">
    <h2><?= h($aniolectivo->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descripcion') ?></h6>
            <p><?= h($aniolectivo->descripcion) ?></p>
            <h6 class="subheader"><?= __('Estado') ?></h6>
            <p><?= h($aniolectivo->estado) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($aniolectivo->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Matriculas') ?></h4>
    <?php if (!empty($aniolectivo->matriculas)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Grado Id') ?></th>
            <th><?= __('Aniolectivo Id') ?></th>
            <th><?= __('Alumno Id') ?></th>
            <th><?= __('Fecha') ?></th>
            <th><?= __('Estado') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($aniolectivo->matriculas as $matriculas): ?>
        <tr>
            <td><?= h($matriculas->id) ?></td>
            <td><?= h($matriculas->grado_id) ?></td>
            <td><?= h($matriculas->aniolectivo_id) ?></td>
            <td><?= h($matriculas->alumno_id) ?></td>
            <td><?= h($matriculas->fecha) ?></td>
            <td><?= h($matriculas->estado) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Matriculas', 'action' => 'view', $matriculas->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Matriculas', 'action' => 'edit', $matriculas->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Matriculas', 'action' => 'delete', $matriculas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matriculas->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
