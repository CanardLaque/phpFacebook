
var phpFacebookApp = angular.module('phpFacebookApp', []);

phpFacebookApp.controller('phpFacebookController', ['$scope', function($scope){

    $scope.visible = false ;

    $scope.addComment = function (){
      $scope.visible = !$scope.visible;
    };

}]);


