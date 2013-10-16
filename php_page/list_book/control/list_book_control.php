<?php
class List_book_control
{
    private $model_in;
    private $cat_type_in;
    private $major_type_in;
    public function __construct	(List_book_model $model, $cat_type, $major_type)
    {
        $this->model_in = $model;
        $this->cat_type_in = $cat_type;
        $this->major_type_in = $major_type;
    }
        
    public function load_book_list()
    {
	if ($this->major_type_in == 0)
	{
	  $querry = "SELECT * FROM book_list WHERE cat_type=".$this->cat_type_in;
	}
	else
	{
	  $querry = "SELECT * FROM book_list WHERE cat_type=".$this->cat_type_in." and major_type=".$this->major_type_in;
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
}
?>
