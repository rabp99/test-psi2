<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Grados");
?>

<?php $this->start("opciones"); ?>
    <a href="<?= $this->Url->build(["controller" => "Grados", "action" => "add"]); ?>" class="btn btn-primary">
         <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> 
         Nuevo Grado
    </a>
<?php $this->end(); ?>

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort("id") ?></th>
                <th><?= $this->Paginator->sort("descripcion") ?></th>
                <th><?= $this->Paginator->sort("nivel") ?></th>
                <th class="actions"><?= __("Acciones") ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($grados as $grado) {
            echo $this->Html->tableCells(
                [
                    $this->Number->format($grado->id),
                    h($grado->descripcion),
                    h($grado->nivel),
                    $this->Html->link(__('Ver'), ['action' => 'view', $grado->id]) . " | " .
                    $this->Html->link(__('Editar'), ['action' => 'edit', $grado->id]) . " | " .
                    $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $grado->id], ['confirm' => __("¿Estás seguro de deshabilitar el Grado de código {0}?", $grado->id)])
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