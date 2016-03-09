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

<!-- Nav tabs -->
<ul class="nav nav-tabs">
    <li class="active">
        <a href="#Preguntas" data-toggle="tab" aria-expanded="true">Preguntas</a>
    </li>
    <li class="">
        <a href="#Alternativas" data-toggle="tab" aria-expanded="false">Alternativas</a>
    </li>
    <li class="">
        <a href="#Metodologia" data-toggle="tab" aria-expanded="false">Metodología</a>
    </li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade active in" id="Preguntas">
        <h4>Preguntas</h4>
        <div class="form-group input-group">
            <input id="txtPregunta" type="text" class="form-control">
            <span class="input-group-btn">
                <button id="btnAgregarPregunta" class="btn btn-default" type="button"><i class="fa fa-plus"></i>
                </button>
            </span>
        </div>
        <ol id="olPreguntas">
        </ol>
    </div>
    <div class="tab-pane fade" id="Alternativas">
        <h4>Alternativas</h4>
        alternativas iguales por cada pregunta -> definir alternativas globales | alternativas diferentes -> definir alternativas por pregunta
    </div>
    <div class="tab-pane fade" id="Metodologia">
        <h4>Messages Tab</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>



<?= $this->Form->end() ?>
<?= $this->Html->link("Lista de Tests", ["controller" => "Tests", "action" => "index"]) ?>


<?php echo $this->Html->scriptStart(["block" => "script"]); ?>
    $(document).ready(function() {
        $("#btnAgregarPregunta").click(function() {
            $("#olPreguntas").append("<li>" + $("#txtPregunta").val() + "</li>");
        });
    });
<?php echo $this->Html->scriptEnd(); ?>

    