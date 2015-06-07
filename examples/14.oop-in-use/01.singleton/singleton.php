<?php
class Singleton {
    // required to show the example of the problem
    public static $calls = 0;

    public function __construct(){
        
        // required to show the example of the problem
        self::$calls++;
    }

    // Singleton Magic
    public static function getInstance(){
        static $db = null;
        
        if( $db == null )
        {
            $db = new Singleton();
        }

        return $db;
    }


    // required to show the example of the problem
    public static function getTotalCalls(){
        return self::$calls;
    }
}
?>