<?php
    $this->extend("/Common/vista");
    $this->assign("title", "Tests");
?>

<?php $this->start("opciones"); ?>
    <div class="btn-group">
        <button type="button" class="btn btn-primary">
            <span class="glyphicon glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span> Opciones
        </button>
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="caret"></span>
            <span class="sr-only">Toggle Dropdown</span>
        </button>
        <ul class="dropdown-menu">
            <li>
                <a href="<?= $this->Url->build(["controller" => "Tests", "action" => "add"]); ?>">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nuevo Test
                </a>
            </li>
            <li>
                <a href="<?= $this->Url->build(["controller" => "Tests", "action" => "edit", $test->id]); ?>">
                    <span class="glyphicon glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar Test
                </a>
            </li>
        </ul>
    </div>
<?php $this->end(); ?>

<h5><strong>Código</strong></h5>
<p><?= h($test->id) ?></p>

<h5><strong>Nombre de Prueba</strong></h5>
<p><?= h($test->nombre_prueba) ?></p>

<?= $this->Form->create($test) ?>
<?php $this->Form->templates([
    "input" => "<input type='{{type}}' name='{{name}}' {{attrs}} class='form-control' />",
    "select" => "<select name='{{name}}' {{attrs}} class='form-control'>{{content}}</select>",
    "textarea" => "<textarea class='form-control' name='{{name}}' {{attrs}}>{{value}}</textarea>"
]) ?>
<div class="form-group input-group">
    <input id="txtPregunta" type="text" class="form-control">
    <span class="input-group-btn">
        <button id="btnAgregarPregunta" class="btn btn-default" type="button"><i class="fa fa-plus"></i>
        </button>
    </span>
</div>
<ol id="olPreguntas">
</ol>
<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Tests", ["controller" => "Tests", "action" => "index"]) ?>


<?php echo $this->Html->scriptStart(["block" => "script"]); ?>
    $(document).ready(function() {
    alert("dsadas");
        $("#btnAgregarPregunta").click(function() {
            $("#olPreguntas").append("<li>" + $("#txtPregunta").val() + "</li>");
        });
    });
<?php echo $this->Html->scriptEnd(); ?>