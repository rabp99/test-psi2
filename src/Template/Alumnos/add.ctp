<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Alumnos"); 
    
    $this->Html->css("jquery-ui.min", ["block" => "css"]);
    $this->Html->css("jquery-ui.structure.min,css", ["block" => "css"]);
    $this->Html->css("jquery-ui.theme.min,css", ["block" => "css"]);
    
    $this->Html->script("jquery-ui.min", ["block" => "script"]);
    $this->Html->script("datepicker-es", ["block" => "script"]);
?>

<?= $this->Form->create($alumno) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("nombres", [
                "label" => "Nombres",
                "class" => "form-control",
                "autofocus" => "autofocus"
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
                "class" => "form-control",
                "type" => "text"
            ]); 
            echo $this->Form->button("Registrar", ["class" => "btn btn-default"]);
        ?>
    </div>
<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Alumnos", ["controller" => "Alumnos", "action" => "index"]) ?>

<?php echo $this->Html->scriptStart(["block" => "script"]); ?>
    $(document).ready(function() {
        $("#fecha-nac").datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: "yy-mm-dd"
        });
    });
<?php echo $this->Html->scriptEnd(); ?>