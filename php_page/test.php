<?php
include("test_model.php");
include("test_control.php");
include("test_view.php");
//initiate the triad 
$model = new Model(); 
//It is important that the controller and the view share the model 
$controller = new Controller($model); 
$view = new View($controller, $model); 
echo $view->output();
?>