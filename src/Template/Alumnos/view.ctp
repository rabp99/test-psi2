<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Alumnos");
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
<?php $this->end(); ?>

<h5><strong>Código</strong></h5>
<p><?= h($alumno->id) ?></p>

<h5><strong>Nombre Completo</strong></h5>
<p><?= h($alumno->nombre_completo) ?></p>

<h5><strong>Fecha de Nacimiento</strong></h5>
<p><?= h($alumno->fecha_nac->i18nFormat("YYYY-MM-dd")) ?></p>
<?= $this->Html->link("Lista de Alumnos", ["controller" => "Alumnos", "action" => "index"]) ?>