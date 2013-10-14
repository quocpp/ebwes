<?php
class Control
{
    private $model_in;
    public function __construct	(Model $model)
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
}
?>
