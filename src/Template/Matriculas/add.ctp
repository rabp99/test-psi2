<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Matrículas");
?>

<?= $this->Form->create($matricula) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("grados._id", [
                "label" => "Grado",
                "class" => "form-control",
                "empty" => "Selecciona uno",
                "options" => $grados
            ]);
            echo $this->Form->input("apellido_paterno", [
                "label" => "Apellido Paterno",
                "class" => "form-control"
            ]); 
            echo $this->Form->input("apellido_materno", [
                "label" => "Apellido Materno",
                "class" => "form-control"
            ]); 
            echo $this->Form->input("fecha_nac", [
                "label" => "Fecha de Nacimiento",
                "class" => "form-control"
            ]); 
            echo $this->Form->button("Registrar", ["class" => "btn btn-default"]);
        ?>
    </div>
<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Alumnos", ["controller" => "Alumnos", "action" => "index"]) ?>