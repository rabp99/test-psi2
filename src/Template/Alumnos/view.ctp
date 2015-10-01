<?php
    $this->assign("title", "Alumnos");
?>
<div class="row">
    <div class="col-lg-12">     
        <!-- Split button -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary">
                <span class="glyphicon glyphicon-copy" aria-hidden="true"></span> Opciones
            </button>
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
            </button>
            <ul class="dropdown-menu">
                <li>
                    <a href="<?= $this->Url->build(["controller" => "Alumnos", "action" => "add"]); ?>">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Alumno
                    </a>
                </li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
            </ul>
        </div>
        <h5><strong>Código</strong></h5>
        <p><?= h($alumno->id) ?></p>
        
        <h5><strong>Nombre Completo</strong></h5>
        <p><?= h($alumno->nombre_completo) ?></p>
        
        <h5><strong>Fecha de Nacimiento</strong></h5>
        <p><?= h($alumno->fecha_nac) ?></p>
    </div>
    <?= $this->Html->link("Lista de Alumnos", ["controller" => "Alumnos", "action" => "index"]) ?>
</div>