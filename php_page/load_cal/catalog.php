<?php
 include("model/sql.php");
 include("control/control.php");
 include("view/view.php");
 
 
 $model = new model();
 $control = new control($model);
 $view = new view($control);
 $view->outcatalog();
?>
