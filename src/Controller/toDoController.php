<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class toDoController extends AbstractController
{
    #[Route('/api/get')]
    public function getToDos(){
        $request = Request::createFromGlobals();
        $requestBody = $request->toArray();
        $requestQuery = $request->query->all();
        return new JsonResponse([$requestBody,$requestQuery]);
        #$toDos = toDoContainer->getAll();
    }

    #[Route('/api/getOne')]
    public function getToDo(){
        #toDoContainer->getOne();
    }

    #[Route('/api/add')]
    public function addToDo(){
        #toDoContainer->create();
    }

    #[Route('/api/edit')]
    public function editToDo(){
        #$toDo = toDoContainer->getOne();
        #$toDO = toDoController->checkDeadline(toDo);
        #toDoContainer->update();
    }

    #[Route('/api/finish')]
    public function finishToDo(){
        #toDoContainer.update()
    }
}
