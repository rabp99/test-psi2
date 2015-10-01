<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Aniolectivo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="aniolectivos index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('descripcion') ?></th>
            <th><?= $this->Paginator->sort('estado') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($aniolectivos as $aniolectivo): ?>
        <tr>
            <td><?= $this->Number->format($aniolectivo->id) ?></td>
            <td><?= h($aniolectivo->descripcion) ?></td>
            <td><?= h($aniolectivo->estado) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $aniolectivo->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $aniolectivo->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $aniolectivo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aniolectivo->id)]) ?>
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
