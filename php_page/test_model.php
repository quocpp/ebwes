<?php
class Model { 
    public $text; 
     
    public function __construct() { 
        $this->text = 'Hello world!'; 
    }
    public function out()
    {
      return $this->text;
    }
} 
?>