<?php
require_once "Client.php";


// Use one
require_once "logger/FileLogger.php";

$client = new Client();
$client->setLogger( new FileLogger() );
$client->Log("File log");


echo "<br /><br />";
require_once "logger/DBLogger.php";

$client = new Client();
$client->setLogger( new DBLogger() );
$client->Log( "DB log" );
