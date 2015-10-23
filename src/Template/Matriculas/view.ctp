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
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Matrícula
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

<h5><strong>Código</strong></h5>
<p><?= h($matricula->id) ?></p>

<h5><strong>Grado</strong></h5>
<p><?= h($matricula->grado->descripcion) ?></p>

<h5><strong>Año Lectivo</strong></h5>
<p><?= h($matricula->aniolectivo->descripcion) ?></p>

<h5><strong>Alumno</strong></h5>
<p><?= h($matricula->alumno->nombre_completo) ?></p>
<?= $this->Html->link("Lista de Matrículas", ["controller" => "Matriculas", "action" => "index"]) ?>