<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Tipo'), ['action' => 'edit', $tipo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo'), ['action' => 'delete', $tipo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tests'), ['controller' => 'Tests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Test'), ['controller' => 'Tests', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="tipos view large-10 medium-9 columns">
    <h2><?= h($tipo->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descripcion') ?></h6>
            <p><?= h($tipo->descripcion) ?></p>
            <h6 class="subheader"><?= __('Estado') ?></h6>
            <p><?= h($tipo->estado) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($tipo->id) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Tests') ?></h4>
    <?php if (!empty($tipo->tests)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Tipo Id') ?></th>
            <th><?= __('Descripcion') ?></th>
            <th><?= __('Estado') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($tipo->tests as $tests): ?>
        <tr>
            <td><?= h($tests->id) ?></td>
            <td><?= h($tests->tipo_id) ?></td>
            <td><?= h($tests->descripcion) ?></td>
            <td><?= h($tests->estado) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Tests', 'action' => 'view', $tests->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Tests', 'action' => 'edit', $tests->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Tests', 'action' => 'delete', $tests->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tests->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
