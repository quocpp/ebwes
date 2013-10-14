
<link rel="stylesheet" type="text/css" href="php_page/css/menu.css">
<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script>
<script type='text/javascript' src="php_page/js/menu_jquery.js"></script>
<?php
 include("model/sql.php");
 include("control/control.php");
 include("view/view.php");
 
 
 $model = new Model();
 $control = new Control($model);
 $view = new View($control);
 $view->outcatalog();
?>
