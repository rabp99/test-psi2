<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Grados");
?>

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