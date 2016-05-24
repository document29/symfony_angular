(function (){
    var app = angular.module('taskApp', []);
    app.controller('taskController', ['$scope','$http', function($scope, $http){
        $http.get('api/task').
            then(function(response) {
                $scope.tasks = response.data; 
            },function(errorResponse) {
                $scope.error = errorResponse;
            });
    }]);


})();
