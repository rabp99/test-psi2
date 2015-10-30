<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Tipos de Test");
?>

<?php $this->start("opciones"); ?>
    <a href="<?= $this->Url->build(["controller" => "Tipos", "action" => "add"]); ?>" class="btn btn-primary">
         <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> 
         Nuevo Tipo de Test
    </a>
<?php $this->end(); ?>

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort("id", "Código") ?></th>
                <th><?= $this->Paginator->sort('descripcion', "Descripción") ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($tipos as $tipo) {
            echo $this->Html->tableCells(
                [
                    $this->Number->format($tipo->id),
                    h($tipo->descripcion),
                    $this->Html->link(__('Ver'), ['action' => 'view', $tipo->id]) . " | " .
                    $this->Html->link(__('Editar'), ['action' => 'edit', $tipo->id]) . " | " .
                    $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $tipo->id], ['confirm' => __('¿Estás seguro de deshabilitar el Alumno de código {0}?', $tipo->id)])
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