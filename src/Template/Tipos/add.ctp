<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Tipos de Tests");
?>

<?= $this->Form->create($tipo) ?>
<?php $this->Form->templates([
    "input" => "<input type='{{type}}' name='{{name}}' {{attrs}} class='form-control' />"
]) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("descripcion", [
                "label" => "Descripción",
                "autofocus", "autofocus"
            ]);
            echo $this->Form->button("Registrar", ["class" => "btn btn-default"]);
        ?>
    </div>
<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Tipos de Tests", ["controller" => "Tipos", "action" => "index"]) ?>