<?= $this->Html->script('angular.min.js', ['block' => 'script']); ?>
<?= $this->Html->script('jquery-ui.min.js', ['block' => 'scriptBottom']); ?>
<?= $this->Html->script('mainController.js', ['block' => 'scriptBottom']); ?>
<style>
    tbody#sortable tr {
        cursor: move;
    }
</style>
<div ng-app="testsApp" ng-controller="mainController">
    <fieldset>
        <legend>Ingresar Categorias</legend>
        <div class="input text">
            <label>Título</label>
            <input type="text" ng-model="categoria.titulo" class="form-control">
            <label>Descripción</label>
            <textarea ng-model="categoria.descripcion" class="form-control"></textarea>
        </div>
        <button ng-click="addCategoria(categoria)">Agregar Categoria</button>
        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody id="sortable">
                <tr ng-repeat="categoria in categorias" ng-class-odd="'info'" ng-class-even="'warning'">
                    <td>{{ categoria.titulo}}</td>
                    <td>{{ categoria.descripcion}}</td>
                    <th><button ng-click="deleteCategoria($index)">Eliminar</button></th>
                </tr>
            </tbody>
        </table>
    </fieldset>
</div>