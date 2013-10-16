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
	     <div id='cssmenu'>

<?
            while ($row = $result1->fetchAssoc()) 
            {
?>
	    <ul>
	      <li class='has-sub last'><a href='#'><span><? echo $row['name']; ?></span></a>
		<ul>
		<?php
		  $cat_resut = $this->control_in->load_catalog_list($row['num']);
		  while ((count($cat_resut) > 0) && ($cat_row = $cat_resut->fetchAssoc()))
		  {
		?>
		  <li><a href='#'><span><? echo $cat_row['name'] ?></span></a></li>
		<?
		  }
		?>
		</ul>
	      </li>
	    </ul>    
<?
            }
            ?>
            </div>
            <?
        }
        catch (Exception $ex) {
            echo $ex->getMessage();
        }
    }
}
?>