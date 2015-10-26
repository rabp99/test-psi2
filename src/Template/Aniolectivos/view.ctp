<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Años Lectivos");
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
                <a href="<?= $this->Url->build(["controller" => "Aniolectivos", "action" => "add"]); ?>">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Año Lectivo
                </a>
            </li>
            <li>
                <a href="<?= $this->Url->build(["controller" => "Aniolectivos", "action" => "edit", $aniolectivo->id]); ?>">
                    <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Año Lectivo
                </a>
            </li>
        </ul>
    </div>
<?php $this->end(); ?>

<h5><strong>Código</strong></h5>
<p><?= h($aniolectivo->id) ?></p>

<h5><strong>Descripción</strong></h5>
<p><?= h($aniolectivo->descripcion) ?></p>

<?= $this->Html->link("Lista de Años Lectivos", ["controller" => "Aniolectivos", "action" => "index"]) ?>