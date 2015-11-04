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
<!--
<div class="dataTable_wrapper">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort("id", "Código") ?></th>
                <th><?= $this->Paginator->sort('apellido_paterno', "Nombre Completo") ?></th>
                <th><?= $this->Paginator->sort('fecha_nac') ?></th>
                <th class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($alumnos as $alumno) {
            echo $this->Html->tableCells(
                [
                    $this->Number->format($alumno->id),
                    h($alumno->nombre_completo),
                    h($alumno->fecha_nac->i18nFormat("YYYY-MM-dd")),
                    $this->Html->link(__('Ver'), ['action' => 'view', $alumno->id]) . " | " .
                    $this->Html->link(__('Editar'), ['action' => 'edit', $alumno->id]) . " | " .
                    $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $alumno->id], ['confirm' => __('¿Estás seguro de deshabilitar el Alumno de código {0}?', $alumno->id)])
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
-->