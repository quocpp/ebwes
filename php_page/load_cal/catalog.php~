<?php
 include("model/sql.php");
 include("control/control.php");
 include("view/view.php");
 
 drupal_add_js('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
 drupal_add_js('php_page/load_cal/js/menu_jquery.js');
 drupal_add_css('php_page/load_cal/css/menu.css');
 
 $model = new Model();
 $control = new Control($model);
 $view = new View($control);
 $view->outcatalog();
?>
