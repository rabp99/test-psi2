<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Matrículas");
?>

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