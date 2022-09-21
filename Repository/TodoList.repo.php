<?php
namespace Repository;
use Entity\TodoList;

interface todoListRepository{
    function save(TodoList $todoList):void;
    function remove(int $id):bool;
    function findAll():array;
}
class todoListRepositoryImpl implements todoListRepository{
    private array $todoList=[];
    function save(TodoList $todoList):void{
        $number=sizeof($this->todoList)+1;
        $this->todoList[$number]=$todoList;
    }
    function remove(int $id):bool{
        if ($id > sizeof($this->todoList) || $id < 1){
            echo "Tidak ada id todo $id".PHP_EOL;
            return false;
        }
        for($i=$id; $i < sizeof($this->todoList); $i++){
            $this->todoList[$i] = $this->todoList[$i+1];
        }
        unset($this->todoList[sizeof($this->todoList)]);
    
        return True;
    }
    function findAll():array{
        return $this->todoList;
    }
}