<?= $this->Html->css("getAlumnos"); ?>
<?php
    echo $this->Form->input("alumno_id", [
        "label" => "Código del Alumno",
        "type" => "text",
        "readonly" => true,
        "data-toggle" => "modal",
        "data-target" => "#mdlGetAlumno"
    ]);
    echo $this->Form->input("nombreCompleto", [
        "label" => "Nombre del Alumno",
        "type" => "text",
        "readonly" => true,
        "data-toggle" => "modal",
        "data-target" => "#mdlGetAlumno",
        "value" => @$matricula->alumno->nombre_completo
    ]);
?>

<!-- Modal -->
<div class="modal fade" id="mdlGetAlumno" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                <h4 class="modal-title">Seleccionar Alumno</h4>
            </div>
            <div class="modal-body">
                <?php
                    echo $this->Form->input("busqueda", [
                        "label" => "Buscar",
                        "type" => "search"
                    ]);
                ?>
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="tblAlumnos">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Nombre Completo</th>
                                <th>Fecha de Nacimiento</th>
                                <th class="actions"><?= __('Seleccionar') ?></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php foreach($alumnos as $alumno) {
                            echo $this->Html->tableCells(
                                [
                                    $this->Number->format($alumno->id),
                                    h($alumno->nombre_completo),
                                    h($alumno->fecha_nac->i18nFormat("YYYY-MM-dd")),
                                    $this->Form->button($this->Html->tag("span", "", ["class" => "glyphicon glyphicon-ok"]) . "", ["class" => "btn btn-default seleccionarAlumno", "type" => "button"])
                                ], [
                                    "class" => "info"
                                ], [
                                    "class" => "warning"
                                ]
                            );
                        } ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer"> 
                <?php echo $this->Html->link("Crear Alumno", ["controller" => "Alumnos", "action" => "add"], ["class" => "btn btn-primary"]); ?>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>
<?= $this->Html->scriptStart(['block' => true]); ?>
    $("body").on("click", ".seleccionarAlumno", function() {
        var id = $(this).parent().parent().find("td:eq(0)").text();
        var nombreCompleto = $(this).parent().parent().find("td:eq(1)").text(); 
        $("#alumno-id").val(id);
        $("#nombrecompleto").val(nombreCompleto);
        $("#busqueda").val("");
        $("#mdlGetAlumno").modal('toggle');
    }); 
    $("#alumno-busqueda").keyup(function() {
        var busqueda = $(this).val();
        $("#tblAlumnos tbody tr").each(function() {
            var nombreCompleto = $(this).find("td:eq(1)").text();
            if(nombreCompleto.indexOf(busqueda) == -1) 
                $(this).hide();
            else
                $(this).show();
        });
    });
<?= $this->Html->scriptEnd(); ?>