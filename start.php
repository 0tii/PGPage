<?php
include('classes/controller.php');
include('classes/model.php');
include('classes/view.php');

$request = array_merge($_GET, $_POST);

$controller = new Controller($request);

echo $controller->display();
?>