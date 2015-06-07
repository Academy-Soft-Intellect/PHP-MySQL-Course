<?php
class Client{

    private $logger;

    public function setLogger( LoggerInterface $logger ){
        $this->logger = $logger;
    }

    public function Log($data){
        return $this->logger->log($data);
    }
}