
var todolistApp = angular.module('todolistApp', []);

todolistApp.controller('todoController', ['$scope', function($scope){

    $scope.todos = [
        { taskName : 'Acheter du pain', done : true},
        { taskName : 'Réparer le PC' , done : true },
        { taskName : 'Louer un DVD' , done : false },
        { taskName : 'Nourrir le chat' , done : false },
        { taskName : 'Apprendre AngularJS', done : true }
    ];

    $scope.remaining = function(){
        var undone = $scope.todos.length;

        $scope.todos.forEach(function(el){
            if (el.done)
            undone--;
        });
      return undone;
    };

    $scope.add = function() {
        $scope.todos.unshift({
            taskName : $scope.newTaskName,
            done : false
        });
        $scope.newTaskName = '';
    };


}]);


