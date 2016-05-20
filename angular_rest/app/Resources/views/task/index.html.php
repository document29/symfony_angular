<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Task-a-tron 9000</title>
        <link rel="stylesheet"
            href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico" />

    </head>
    <body>
        <div ng-app="taskApp">
            <div id="outter_wrap" class="container">
                <div id="task_head" class="row">
                    <div class="col-md-12">
                        <h1><p class="text-center">Task-a-Tron 9000</p></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1 col-md-offset-2">
                        <button type="button" class="btn btn-default" aria-label="Add Task">
                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add
                        </button>
                    </div>
                </div>
                <div ng-controller="taskController as task">
                    <div ng-repeat="t in task.tasks">
                        <div class="row">
                            <div class="col-md-1 col-md-offset-3">
                                <p>{{t.id}}</p>
                            </div>
                            <div class="col-md-2">
                                <p>{{t.name}}</p>
                            </div>
                            <div class="col-md-3">
                                <p>{{t.description}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type ="text/javascript" src="angular.min.js"></script>
        <script type ="text/javascript" src="task.js"></script>
    </body>
</html>
