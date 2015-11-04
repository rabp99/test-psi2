<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Grados");
?>

<?= $this->Form->create($grado) ?>
<?php $this->Form->templates([
    "input" => "<input type='{{type}}' name='{{name}}' {{attrs}} class='form-control' />",
    "select" => "<select name='{{name}}' {{attrs}} class='form-control'>{{content}}</select>"
]) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("descripcion", [
                "label" => "Descripción",
                "autofocus", "autofocus"
            ]);
            echo $this->Form->input("nivel", [
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