<?php
class Sql_model
{     
    public function load_table($querry)
    {
        try {
            db_set_active('book');
            $result = db_query($querry);
            db_set_active('default');
            return $result;
        }
        catch (Exception $ex) {
            throw new Exception("Querry error");
        }
    }
}
?>
