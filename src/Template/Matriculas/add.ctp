<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Matrículas");
?>

<?= $this->Form->create($matricula) ?>
<?php $this->Form->templates([
    "input" => "<input type='{{type}}' name='{{name}}' {{attrs}} class='form-control' />",
    "select" => "<select name='{{name}}' {{attrs}} class='form-control'>{{content}}</select>"
]) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("aniolectivo_id", [
                "label" => "Año Lectivo",
                "empty" => "Selecciona uno"
            ]);
            echo $this->Form->input("grado_id", [
                "label" => "Grado",
                "empty" => "Selecciona uno"
            ]);
            echo $this->element("getAlumno");
            echo $this->Form->button("Registrar", ["class" => "btn btn-default"]);
        ?>
    </div>
<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Matrículas", ["controller" => "Matriculas", "action" => "index"]) ?>