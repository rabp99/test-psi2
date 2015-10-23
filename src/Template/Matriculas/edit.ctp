<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Matrículas");
?>

<?php $this->start("opciones"); ?>
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
                <a href="<?= $this->Url->build(["controller" => "Matriculas", "action" => "add"]); ?>">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Editar Matrícula
                </a>
            </li>
            <li>
                <a href="<?= $this->Url->build(["controller" => "Matriculas", "action" => "edit", $matricula->id]); ?>">
                    <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Matrícula
                </a>
            </li>
        </ul>
    </div>
<?php $this->end(); ?>

<?= $this->Form->create($matricula) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("aniolectivo_id", [
                "label" => "Año Lectivo",
                "class" => "form-control",
                "empty" => "Selecciona uno"
            ]);
            echo $this->Form->input("grado_id", [
                "label" => "Grado",
                "class" => "form-control",
                "empty" => "Selecciona uno"
            ]);
            echo $this->element("getAlumno");
            echo $this->Form->button("Registrar", ["class" => "btn btn-default"]);
        ?>
    </div>
<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Matrículas", ["controller" => "Matriculas", "action" => "index"]) ?>