<?
  class List_book_view
  {
    private $control_in;
    public function __construct(List_book_control $control)
    {
        $this->control_in = $control;
    }
    
    public function out_book_list()
    {
      try
      {
	$result = $this->control_in->load_book_list();
      }
      catch (Exception $ex)
      {
	echo $ex->getMessage();
      }
?>
      <form action="" method="post">
	<select id="cmb_cat_type" name="cars">
	  <option value="volvo">all</option>
	  <option value="saab">Saab</option>
	  <option value="fiat">Fiat</option>
	  <option value="audi">Audi</option>
	</select>
	<input id="search_cat" type="submit">
      </form>
<?
      while ((count($result)>0) && $row = $result->fetchAssoc()) 
      {
      
?>
	<div id="book_field">
          <div id="book_image">
            <img id="book_img_l" src="<? echo $row['image']; ?>">
          </div>
          <div id="book_info">
            <div id="book_name"> 
	      <a href="<? echo $row['link']; ?>">
		<h2> <? echo $row['name'];?> </h2>
	      </a>
            </div>
	    <div id="book_des"> <? echo $row['des'] ?> </div>
	  </div>
       </div>
<?
      }
    }
  }
?>
