<?php
class List_book_control
{
    private $model_in;
    private $cat_type_in;
    private $major_type_in;
    private $cat_control_in;
    private $db_const_in;
    public function __construct	(Sql_model $model,
				 Load_cat_control $cat_control,
				 Db_const $db_const,
				 $cat_type, 
				 $major_type)
    {
        $this->model_in = $model;
        $this->cat_type_in = $cat_type;
        $this->major_type_in = $major_type;
        $this->cat_control_in = $cat_control;
        $this->db_const_in = $db_const;
    }
        
    public function load_book_list()
    {
	if ($this->major_type_in == 0)
	{
	  $querry = "SELECT * FROM ".$this->db_const_in->BOOK_LIST.
		    " WHERE ".
		    $this->db_const_in->BOOK_LIST_CAT_TYPE."=".
		    $this->cat_type_in;
	}
	else
	{
	 $querry = "SELECT * FROM ". $this->db_const_in->BOOK_LIST.
		     " WHERE ".$this->db_const_in->BOOK_LIST_CAT_TYPE."=".
		     $this->cat_type_in.
		     " and ".$this->db_const_in->MAJOR_TYPE.
		     "=".$this->major_type_in;
	}
	
        try
        {
            $result = $this->model_in->load_table($querry);
            
        }
        catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result;
    }
    
    public function load_maj()
    {
	$querry = "SELECT * FROM major_type WHERE cat_num=".$this->cat_type_in;
	try
        {
            $result = $this->model_in->load_table($querry);
            
        }
        catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result;
    }
}
?>
