<?php
    $this->assign("title", "Alumnos");
?>
<div class="row">
    <div class="col-lg-12">
        <a href="<?= $this->Url->build(["controller" => "Alumnos", "action" => "add"]); ?>" class="btn btn-primary">
             <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> 
             Nuevo Alumno
        </a>
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('nombre_completo') ?></th>
                        <th><?= $this->Paginator->sort('fecha_nac') ?></th>
                        <th><?= $this->Paginator->sort('estado') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($alumnos as $alumno) {
                    echo $this->Html->tableCells(
                        [
                            $this->Number->format($alumno->id),
                            h($alumno->nombre_completo),
                            h($alumno->fecha_nac),
                            h($alumno->estado),
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
                <p><?= $this->Paginator->counter() ?></p>
            </div>
        </div>
    </div>
</div>