<?php 
require_once("class_database.php");

class Product extends Database{
    public $id;
    public $type;
    public $img;
    public $price;
    public $quantity;
    static protected $table_name = "cakes";        
}
?>