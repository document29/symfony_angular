(function (){
    var app = angular.module('taskApp', []);
    
    app.controller('taskController', function(){
        this.tasks = t;
    });

    var t = [
        {
            name:"Task 1",
            description:"task 1 description",
            id:1,
        },
        {
            name:"Task 2",
            description:"task 2 description",
            id:2,
        }
    ];
})();
