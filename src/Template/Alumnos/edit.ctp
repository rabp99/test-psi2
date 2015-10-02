<?php
    $this->assign("title", "Alumnos");
?>
<div class="row">
    <div class="col-lg-12">
        <!-- Split button -->
        <div class="btn-group">
            <button type="button" class="btn btn-primary">
                <span class="glyphicon glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Opciones
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
                <li>
                    <a href="<?= $this->Url->build(["controller" => "Alumnos", "action" => "edit", $alumno->id]); ?>">
                        <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Alumno
                    </a>
                </li>
            </ul>
        </div>
        <div class="alumnos form large-10 medium-9 columns">
            <?= $this->Form->create($alumno) ?>
            <div class="form-group">
                <?php 
                    echo $this->Form->input("nombres", [
                        "label" => "Nombres",
                        "class" => "form-control"
                    ]);
                    echo $this->Form->input("apellido_paterno", [
                        "label" => "Apellido Paterno",
                        "class" => "form-control"
                    ]); 
                    echo $this->Form->input("apellido_materno", [
                        "label" => "Apellido Materno",
                        "class" => "form-control"
                    ]); 
                    echo $this->Form->input("fecha_nac", [
                        "label" => "Fecha de Nacimiento",
                        "class" => "form-control"
                    ]); 
                    echo $this->Form->button("Registrar", ["class" => "btn btn-default"]);
                ?>
            </div>
            <?= $this->Form->end() ?>
        </div>
        <?= $this->Html->link("Lista de Alumnos", ["controller" => "Alumnos", "action" => "index"]) ?>
    </div>
</div>