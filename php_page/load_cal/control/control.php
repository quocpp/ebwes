<?php
class Load_cat_control
{
    private $model_in;
    public function __construct	(Load_cat_model $model)
    {
        $this->model_in = $model;
    }
    
    public function load_catalog()
    {
        $querry = "SELECT * FROM catalog";
        try
        {
            $result = $this->model_in->load_table($querry);
            
        }
        catch (Exception $ex) {
            throw new Exception($ex->getMessage());
        }
        return $result;
    }
    
    public function load_catalog_list($cat_num)
    {
        $querry = "SELECT * FROM catalog_list WHERE cat_num=".$cat_num;
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
