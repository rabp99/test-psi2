<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Matrículas");
?>

<?= $this->Form->create($matricula) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("aniolectivos", [
                "label" => "Año Lectivo",
                "class" => "form-control",
                "empty" => "Selecciona uno",
                "options" => $aniolectivos
            ]);
            echo $this->Form->input("grado.id", [
                "label" => "Grado",
                "class" => "form-control",
                "empty" => "Selecciona uno",
                "options" => $grados,
            ]);
            echo $this->element("getAlumno");
            echo $this->Form->button("Registrar", ["class" => "btn btn-default"]);
        ?>
    </div>
<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Alumnos", ["controller" => "Alumnos", "action" => "index"]) ?>