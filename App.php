<?php
require_once __DIR__."/Helper/InputHelper.php";
require_once __DIR__."/Repository/TodoList.repo.php";
require_once __DIR__."/Service/TodoList.service.php";
require_once __DIR__."/View/TodoList.view.php";

use Repository\todoListRepositoryImpl;
use Service\todoListServiceImpl;
use View\todoListView;

$todoListRepo=new todoListRepositoryImpl();
$todoListService=new todoListServiceImpl($todoListRepo);
$todoListView=new todoListView($todoListService);

$todoListView->show();
