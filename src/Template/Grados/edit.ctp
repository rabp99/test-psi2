<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Grados");
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
                <a href="<?= $this->Url->build(["controller" => "Grados", "action" => "add"]); ?>">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Grado
                </a>
            </li>
            <li>
                <a href="<?= $this->Url->build(["controller" => "Grados", "action" => "view", $grado->id]); ?>">
                    <span class="glyphicon glyphicon glyphicon-search" aria-hidden="true"></span> Ver Grado
                </a>
            </li>
        </ul>
    </div>
<?php $this->end(); ?>

<?= $this->Form->create($grado) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("descripcion", [
                "label" => "Descripción",
                "class" => "form-control",
                "autofocus", "autofocus"
            ]);
            echo $this->Form->input("nivel", [
               "label" => "Nivel",
                "class" => "form-control",
                "options" => [
                    "Inicial" => "Inicial",
                    "Primaria" => "Primaria",
                    "Secundaria" => "Secundaria"
                ],
                "empty" => "Seleccionar"
            ]);
            echo $this->Form->button("Registrar", ["class" => "btn btn-default"]);
        ?>
    </div>
<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Grados", ["controller" => "Grados", "action" => "index"]) ?>