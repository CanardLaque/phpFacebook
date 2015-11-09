
var phpFacebookApp = angular.module('phpFacebookApp', []);

phpFacebookApp.controller('phpFacebookController', ['$scope', function($scope){

    $scope.addComment = function(){
        $scope.class = 'show';

        $scope.addComment = function(){
            if ($scope.class === "show")
                $scope.class = "hide";
            else
                $scope.class = "show";
        };
    };

}]);


