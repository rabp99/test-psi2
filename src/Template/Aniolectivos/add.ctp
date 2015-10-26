<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Años Lectivos");
?>

<?= $this->Form->create($aniolectivo) ?>
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
<?= $this->Html->link("Lista de Años Lectivos", ["controller" => "Aniolectivos", "action" => "index"]) ?>