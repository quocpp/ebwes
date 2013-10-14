<?php
include("db.php");
class model
{
    public function connet_db()
    {
     $db = new db();
        try {
            $link = mysqli_connect($db->$address,$db->$user,$db-> $password,$db -> $db_name);
            return $link;
        }
        catch (Exception $ex) {
            throw new Exception("Cannot connect database");
        }
        
    }
    
    
    public function load_table($querry)
    {
        try {
            $link   = connet_db();
            $result = mysqli_query($link, $querry);
            mysqli_close($link);
            return $result;
        }
        catch (Exception $ex) {
            throw new Exception("Querry error");
        }
    }
}
?>
