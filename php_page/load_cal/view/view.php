<?
class View
{  
    private $control_in;
    public function __construct(Control $control)
    {
        $this->control_in = $control;
    }
    
    public function outcatalog()
    {
        try {
            $result1 = $this->control_in->load_catalog();
?>          


<?
            while ($row = mysqli_fetch_array($result1)) 
            {
?>
<div id='cssmenu'>
<ul>
   <li><a href='#'><span>Home</span></a></li>
   <li class='has-sub last'><a href='#'><span>Products</span></a>
      <ul>
         <li><a href='#'><span>Menus</span></a></li>
         <li class='last'><a href='#'><span>Products</span></a></li>
      </ul>
   </li>
</ul>
</div>
	    
<?
	     #echo $row['name'];
	     #echo "<br>";
            }
        }
        catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
?>