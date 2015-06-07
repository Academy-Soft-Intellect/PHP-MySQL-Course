<?php
include_once "LoggerInterface.php";

class DBLogger implements LoggerInterface{

    // Required by the Interface
    public function log( $data )
    {
        echo '<div>Implement a loggin into <b>DB</b>..</div>';
        return true;
    }
}