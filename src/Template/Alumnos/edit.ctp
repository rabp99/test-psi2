<?php
    $this->assign("title", "Alumnos");
?>
<div class="alumnos form large-10 medium-9 columns">
    <?= $this->Form->create($alumno) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("nombres", [
                "label" => "Nombres",
                "class" => "form-control"
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
</div>
