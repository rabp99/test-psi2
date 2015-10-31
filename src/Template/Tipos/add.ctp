<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Tipos de Tests");
?>

<?= $this->Form->create($tipo) ?>
    <div class="form-group">
        <?php 
            echo $this->Form->input("descripcion", [
                "label" => "Descripción",
                "class" => "form-control",
                "autofocus", "autofocus"
            ]);
            echo $this->Form->button("Registrar", ["class" => "btn btn-default"]);
        ?>
    </div>
<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Tipos de Tests", ["controller" => "Tipos", "action" => "index"]) ?>