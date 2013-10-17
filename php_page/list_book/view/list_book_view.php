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
	$result1= $this->control_in->load_maj();
      }
      catch (Exception $ex)
      {
	echo $ex->getMessage();
      }
?>
      <form id="choose_maj" action="" method="get">
	<select id="cmb_maj_type" name="maj" <?if(!isset($_GET['maj'])|| $_GET['maj'] =="0")
						echo "selected";?>>
	  <option value="0"> All </option>
	  <?
	    while ((count($result1)>0) && $row1 = $result1->fetchAssoc()) 
	    {
	  ?>
	      <option 
		<? 
		  if(isset($_GET['maj'])|| $_GET['maj'] !="0") 
		    if ($_GET['maj'] == $row1['no'])
		     echo "selected";
		?> 
	      value="<? echo $row1['no']; ?>"><? echo $row1['name']; ?></option>
	  <?
	    }
	  ?>
	</select>
	<input value="Choose" id="search_maj" type="submit">
	<input type="hidden" name="cat" value="<? echo $_GET['cat'] ?>">
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
	      <a id="book_name_link"  href="<? echo $row['link']; ?>">
		 <? echo $row['name'];?>
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
