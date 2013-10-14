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
	    <ul class="menu1">
	      <li>Home</li>
	      <li>Products</li>
	      <li class="parent">Gallery
		<ul>
		  <li>Summer 2012</li>
		  <li>Everyday</li>
		  <li>Love</li>
		</ul>
	      </li>
	    </ul>
	    
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