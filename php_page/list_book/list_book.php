<?php
 include("model/list_book_model.php");
 include("control/list_book_control.php");
 include("view/list_book_view.php");

 drupal_add_css('php_page/list_book/css/book_style.css');
 $cat_a = 0;
 $maj_a = 0;
 $model = new List_book_model();
 if (isset($_GET['cat']))
 {
  if (is_int((int)$_GET['cat']))
  {
   $cat_a = 1;
  }
 }
 
  if (isset($_GET['cat']) && $cat_a ==1)
  {
    if (isset($_GET['maj']))
    {
      if (is_int((int)$_GET['cat']))
      {
	$maj_a = 1;
      }
    }
  }
 
 if ($cat_a == 1)
 {
  if ($maj_a == 1)
   $control = new List_book_control($model,$_GET['cat'],$_GET['maj']);
  else
   $control = new List_book_control($model,$_GET['cat'],0);
  $view = new List_book_view($control);
  $view->out_book_list();
 }
?>