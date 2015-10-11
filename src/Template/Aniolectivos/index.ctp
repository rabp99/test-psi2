<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Años Lectivos");
?>

<?php $this->start("opciones"); ?>
    <a href="<?= $this->Url->build(["controller" => "Aniolectivos", "action" => "add"]); ?>" class="btn btn-primary">
         <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> 
         Nuevo Año Lectivo
    </a>
<?php $this->end(); ?>

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort("id") ?></th>
                <th><?= $this->Paginator->sort("descripcion") ?></th>
                <th class="actions"><?= __("Acciones") ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($aniolectivos as $aniolectivo) {
            echo $this->Html->tableCells(
                [
                    $this->Number->format($aniolectivo->id),
                    h($aniolectivo->descripcion),
                    $this->Html->link(__('Ver'), ['action' => 'view', $aniolectivo->id]) . " | " .
                    $this->Html->link(__('Editar'), ['action' => 'edit', $aniolectivo->id]) . " | " .
                    $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $aniolectivo->id], ['confirm' => __("¿Estás seguro de deshabilitar el Grado de código {0}?", $aniolectivo->id)])
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
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>