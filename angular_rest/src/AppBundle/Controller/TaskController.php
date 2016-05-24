<?php
// src/AppBundle/Controller/TaskController.php
namespace AppBundle\Controller;

use AppBundle\Entity\Task;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class TaskController extends Controller
{
    /**
     * @Route("/api/task")
     * @Route("/api/task/")
     * @Method("GET")
     */
    public function apiGetAllAction()
    {
        $tasks = $this->getDoctrine()
            ->getRepository('AppBundle:Task')
            ->findAll();
        $data = array();
        foreach($tasks as $task)
        {
            $data[] = array('description'=>$task->getDescription(),
                'id'=>$task->getId(),
                'name'=>$task->getName());
        }
        return new JsonResponse($data);
    }

    /**
     * @Route("/api/task/{taskid}")
     * @Method("GET")
     */
    public function apiGetAction($taskid)
    {
        $task = $this->getDoctrine()
            ->getRepository('AppBundle:Task')
            ->find($taskid);
        
        if(!$task){
            throw $this->createNotFoundException(
                'No task found for id '.$taskid
            );
        }
        return new JsonResponse(array('description'=>$task->getDescription(),
            'id'=>$task->getId(),
            'name'=>$task->getName()));
    }
    
    /**
     * @Route("/api/task/{name}/{description}")
     * @Method("POST")
     */
    public function apiCreateAction($name, $description)
    {
        #return new JsonResponse(array("name"=>$name,"description"=>$description));
        $task = new Task();
        $task->setName($name);
        $task->setDescription($description);
        $em = $this->getDoctrine()->getManager();
        
        //Alert doctrine that we want to save the Task
        $em->persist($task);

        //Actual save of Task
        $em->flush();

        return new JsonResponse(array("id"=>$task->getId()));
    }

    /**
     * @Route("/api/task/{taskid}/{name}/{description}")
     * @Method("PUT")
     */
    public function apiUpdateAction($taskid, $name, $description)
    {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle:Task')->find($taskid);
        
        if(!$task){
            throw $this->createNotFoundException(
                'No task found for id '.$taskid
            );
        }
        $task->setName($name);
        $task->setDescription($description);

        //Actual save
        $em->flush();

        return new JsonResponse($task);
    }

    /**
     * @Route("/api/task/{taskid}")
     * @Method("DELETE")
     */
    public function apiDeleteTask($taskid)
    {
        $em = $this->getDoctrine()->getManager();
        $task = $em->getRepository('AppBundle:Task')->find($taskid);
        
        if(!$task){
            throw $this->createNotFoundException(
                'No task found for id '.$taskid
            );
        }
        //Alert doctrine about task removal
        $em->remove($task);

        //Actual save
        $em->flush();

        return new JsonResponse();
    }
}
