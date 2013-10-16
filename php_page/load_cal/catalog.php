<?php
 include("model/sql.php");
 include("control/control.php");
 include("view/view.php");
 
 drupal_add_js('http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
 drupal_add_js('php_page/load_cal/js/menu_jquery.js');
 drupal_add_css('php_page/load_cal/css/menu.css');
 #drupal_set_title;
 
 $model = new Load_cat_model();
 $control = new Load_cat_control($model);
 $view = new Load_cat_view($control);
 $view->outcatalog();
?>
