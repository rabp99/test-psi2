<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Tests");
?>

<?php $this->start("opciones"); ?>
    <a href="<?= $this->Url->build(["controller" => "Tests", "action" => "add"]); ?>" class="btn btn-primary">
         <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> 
         Nuevo Test
    </a>
<?php $this->end(); ?>

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort("id", "Código") ?></th>
                <th><?= $this->Paginator->sort('nombre_prueba', "Nombre de Prueba") ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($tests as $test) {
            echo $this->Html->tableCells(
                [
                    h($test->id),
                    h($test->nombre_prueba),
                    $this->Html->link(__('Ver'), ['action' => 'view', $test->id]) . " | " .
                    $this->Html->link(__('Editar'), ['action' => 'edit', $test->id]) . " | " .
                    $this->Html->link(__('Detalle'), ['action' => 'detalle', $test->id]) . " | " .
                    $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $test->id], ['confirm' => __('¿Estás seguro de deshabilitar el Test de código {0}?', $test->id)])
                ], [
                    "class" => "info"
                ], [
                    "class" => "warning"
                ]
            );
        } ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('siguiente') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter("{{page}} de {{pages}}"); ?></p>
    </div>
</div>