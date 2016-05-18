<?php
// src/AppBundle/Controller/TaskController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class TaskController
{
    /**
    * @Route("/task/get/{taskid}")
    */
    public function getAction($taskid)
    {
        $task = array("name"=>"Fake Task ".$taskid,
                      "id"=>$taskid,
                      "description"=>"Fake task ".$taskid." description");
        return new Response(
            '<html><body>Task name: '.$task['name'].'</br>'.
            'Task ID: '.$task['id'].'</br>'.
            'Task Description: '.$task['description'].'</body></html>');
    }

    /**
    * @Route("/api/task/get/{taskid}")
    */
    public function apiGetAction($taskid)
    {
        $task = array("name"=>"Fake Task ".$taskid,
                      "id"=>$taskid,
                      "description"=>"Fake task ".$taskid." description");
        return new JsonResponse($task);        
    }
}
