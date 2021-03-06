<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Task-a-tron 9000</title>
        <link rel="stylesheet"
            href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <script type ="text/javascript" src="angular.min.js"></script>
        <script type ="text/javascript" src="task.js"></script>

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
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table table-bordered table-hover" ng-controller="taskController">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>NAME</th>
                                    <th>Description
                                        <button type="button" class="btn btn-default btn-xs pull-right" aria-label="Add Task">
                                            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                        </button>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr ng-repeat="t in tasks">
                                    <td ng-cloak>{{t.id}}</td>
                                    <td ng-cloak>{{t.name}}</td>
                                    <td ng-cloak>{{t.description}}</td>
                    
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
