<?php
require_once __DIR__."/../Entity/TodoList.php";
require_once __DIR__."/../Repository/TodoList.repo.php";
require_once __DIR__."/../Service/TodoList.service.php";

use Entity\todoList;
use Repository\todoListRepositoryImpl;
use Service\todoListServiceImpl;
function testShowTodoList(){
    $todoListRepository=new todoListRepositoryImpl();
    
    $todoListRepository->todoList[1]=new todoList("Belajar PHP");
    $todoListService=new todoListServiceImpl($todoListRepository);
    $todoListService->show();
}
function testAddTodoList(){
    $todoListRepository=new todoListRepositoryImpl();
    
    $todoListService=new todoListServiceImpl($todoListRepository);
    $todoListService->add("Belajar PHP");
    $todoListService->add("Belajar Javascript");
    $todoListService->add("Belajar Python");
    $todoListService->show();
}
function testRemoveTodoList(){
    $todoListRepository=new todoListRepositoryImpl();
    
    $todoListService=new todoListServiceImpl($todoListRepository);
    $todoListService->add("Belajar PHP");
    $todoListService->add("Belajar Javascript");
    $todoListService->add("Belajar Python");
    $todoListService->show();

    $todoListService->remove(3);
    $todoListService->show();

}
testRemoveTodoList();