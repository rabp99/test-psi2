<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Tests");
?>
<?= $this->Form->create($test) ?>
<?php $this->Form->templates([
    "input" => "<input type='{{type}}' name='{{name}}' {{attrs}} class='form-control' />",
    "select" => "<select name='{{name}}' {{attrs}} class='form-control'>{{content}}</select>",
    "textarea" => "<textarea class='form-control' name='{{name}}' {{attrs}}>{{value}}</textarea>"
]) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("nombre_prueba", [
                "label" => "Nombre de prueba",
                "autofocus", "autofocus"
            ]);
            echo $this->Form->input("tipo_id", [
                "label" => "Tipo",
                "empty" => "Seleccionar"
            ]);
            echo $this->Form->input("autores");
            echo $this->Form->input("administracion", [
                "label" => "Administración"
            ]);
            echo $this->Form->input("duracion", [
                "label" => "Duración"
            ]);
            echo $this->Form->input("aplicacion", [
                "label" => "Aplicación"
            ]);
            echo $this->Form->input("significacion", [
                "label" => "Significación"
            ]);
            echo $this->Form->input("calificacion", [
                "label" => "Calificación"
            ]);
            echo $this->Form->input("tipificacion", [
                "label" => "Tipificación"
            ]);
            echo $this->Form->input("documentacion", [
                "label" => "Documentación"
            ]);
            echo $this->Form->button("Registrar", ["class" => "btn btn-default"]);
        ?>
    </div>
<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Grados", ["controller" => "Grados", "action" => "index"]) ?>