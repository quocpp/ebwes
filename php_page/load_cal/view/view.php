<?
class view
{  
    private $control_in;
    public function __construct(control $control)
    {
        $this->$control_in = $control;
    }
    
    public function outcatalog()
    {
        try {
 //       $control_in = new control();
            $result1 = $control_in -> load_catalog();
            while ($row = mysqli_fetch_array($result1)) 
            {
	     echo $row['name'];
	     echo "<br>";
            }
        }
        catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
?>