<?php 
class Database {
    static protected $database;
    static protected $table_name = "";

    static public function set_database($db){
        self::$database = $db;
    }

    static public function find_all(){
        $sql = "SELECT * FROM " . static::$table_name;
        $results_array = static::find_by_sql($sql);
        return $results_array; 
    }

    static public function find_by_id($id){
        $sql = "SELECT * FROM " . static::$table_name . " WHERE id = '" . $id . "'";
        $results_array = static::find_by_sql($sql);

        if(empty($results_array)){
            echo "Requested results don't exist";
        }
        else{
            return array_shift($results_array);
        }
    }

    static public function find_by_sql($sql){

        $results = self::$database->query($sql);

        if(!$results){
            echo "Database query falied!";
        }
        else{
            $object_array = [];
            
            while($record = $results -> fetch_assoc()){                
                $object_array[] = static::instantiate($record);
            }
            return $object_array;
        }
        
    }

    static protected function instantiate($record){

        $obj = new static(); 

        foreach($record as $key => $value){
            if(property_exists($obj, $key)){
                $obj -> $key = $value;
            } 
        }
        return $obj;

    }
        
}
?>