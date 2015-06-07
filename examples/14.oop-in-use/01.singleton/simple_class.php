<?php
class SimpleClass {
    // required to show the example of the problem
    public static $calls = 0;

    private $db;

    public function __construct(){
        
        // required to show the example of the problem
        self::$calls++;

        $this->db = "CONNECTION";
    }


    // required to show the example of the problem
    public static function getTotalCalls(){
        return self::$calls;
    }
}
?>