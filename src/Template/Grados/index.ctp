<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Grado'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Matriculas'), ['controller' => 'Matriculas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Matricula'), ['controller' => 'Matriculas', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="grados index large-10 medium-9 columns">
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
    <?php foreach ($grados as $grado): ?>
        <tr>
            <td><?= $this->Number->format($grado->id) ?></td>
            <td><?= h($grado->descripcion) ?></td>
            <td><?= h($grado->estado) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $grado->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grado->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grado->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grado->id)]) ?>
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
