<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Test'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipos'), ['controller' => 'Tipos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo'), ['controller' => 'Tipos', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="tests index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('tipo_id') ?></th>
            <th><?= $this->Paginator->sort('descripcion') ?></th>
            <th><?= $this->Paginator->sort('estado') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($tests as $test): ?>
        <tr>
            <td><?= $this->Number->format($test->id) ?></td>
            <td>
                <?= $test->has('tipo') ? $this->Html->link($test->tipo->id, ['controller' => 'Tipos', 'action' => 'view', $test->tipo->id]) : '' ?>
            </td>
            <td><?= h($test->descripcion) ?></td>
            <td><?= h($test->estado) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $test->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $test->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $test->id], ['confirm' => __('Are you sure you want to delete # {0}?', $test->id)]) ?>
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
