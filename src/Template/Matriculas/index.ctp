<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Matrículas");
?>

<?php $this->start("opciones"); ?>
    <a href="<?= $this->Url->build(["controller" => "Matriculas", "action" => "add"]); ?>" class="btn btn-primary">
         <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> 
         Nueva Matrícula
    </a>
<?php $this->end(); ?>

<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort("id", "Código") ?></th>
                <th><?= $this->Paginator->sort("nombre_completo", "Alumno") ?></th>
                <th><?= $this->Paginator->sort('grado', "Grado") ?></th>
                <th><?= $this->Paginator->sort('aniolectivo', "Año Lectivo") ?></th>
                <th><?= $this->Paginator->sort('fecha', "Fecha") ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($matriculas as $matricula) {
            echo $this->Html->tableCells(
                [
                    $this->Number->format($matricula->id),
                    h($matricula->alumno->nombre_completo),
                    h($matricula->grado->descripcion),
                    h($matricula->aniolectivo->descripcion),
                    h($matricula->fecha),
                    $this->Html->link(__('Ver'), ['action' => 'view', $matricula->id]) . " | " .
                    $this->Html->link(__('Editar'), ['action' => 'edit', $matricula->id]) . " | " .
                    $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $matricula->id], ['confirm' => __('¿Estás seguro de deshabilitar la Matrícula de código {0}?', $matricula->id)])
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