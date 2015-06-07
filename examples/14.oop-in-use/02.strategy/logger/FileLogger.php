<?php
include_once "LoggerInterface.php";

class FileLogger implements LoggerInterface{

    private function writeToFile($data)
    {
        echo '<div>Implement a loggin into <b>FILES</b>..</div>';
    }

    // Required by the Interface
    public function log( $data )
    {
        return $this->writeToFile($data);
    }
}