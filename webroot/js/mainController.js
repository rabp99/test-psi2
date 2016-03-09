var app = angular.module('testsApp', []);
app.controller('mainController', function($scope) {
    var sortableEle;
    $scope.categorias = [];
    
    $scope.addCategoria = function(categoria) {
    	$scope.categorias.push(categoria);
    	$scope.categoria = null;
        sortableEle.refresh();
    };
   
    $scope.deleteCategoria = function(index){
        $scope.categorias.splice(index, 1);
    }
    
    $scope.dragStart = function(e, ui) {
        ui.item.data('start', ui.item.index());
    }
    
    $scope.dragEnd = function(e, ui) {
        var start = ui.item.data('start'),
            end = ui.item.index();
        
        $scope.categorias.splice(end, 0, 
            $scope.categorias.splice(start, 1)[0]);
        
        $scope.$apply();
    }
    
    sortableEle = $('#sortable').sortable({
        start: $scope.dragStart,
        update: $scope.dragEnd
    });
});