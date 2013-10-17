<?
 require_once("php_page/model/sql_model.php");
 require_once("control/list_book_control.php");
 require_once("view/list_book_view.php");
 require_once("php_page/load_cal/control/control.php");
 require_once("php_page/common/db_const.php");
 
 drupal_add_css('php_page/list_book/css/book_style.css');
 
 $cat_a = 0;
 $maj_a = 0;
 
 $db_const = new Db_const();
 $model = new Sql_model();
 $cat_control = new Load_cat_control($model);
 
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
   $control = new List_book_control($model,$cat_control,$db_const,$_GET['cat'],$_GET['maj']);
  else
   $control = new List_book_control($model,$cat_control,$db_const,$_GET['cat'],0);
  $view = new List_book_view($control);
  $view->out_book_list();
 }
?>