<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Tests");
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
                <a href="<?= $this->Url->build(["controller" => "Tests", "action" => "add"]); ?>">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Test
                </a>
            </li>
            <li>
                <a href="<?= $this->Url->build(["controller" => "Tests", "action" => "edit", $test->id]); ?>">
                    <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Test
                </a>
            </li>
        </ul>
    </div>
<?php $this->end(); ?>

<h5><strong>Código</strong></h5>
<p><?= h($test->id) ?></p>

<h5><strong>Nombre de Prueba</strong></h5>
<p><?= h($test->nombre_prueba) ?></p>

<?= $this->Html->link("Lista de Tests", ["controller" => "Tests", "action" => "index"]) ?>