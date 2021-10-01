<?php

use App as GlobalApp;

class App{
    public $logFile = 'log.txt';
    public $logData = 'test';

    public function CheckSerives(){
        echo '[+] checking Servies.<br>';
        $this->logData = 'Success';
    }

    public function __destruct()
    {
        file_put_contents(__DIR__ . '/' .$this->logFile, $this->logData);
        echo'[+] Logs written to log file.<br>';
    }
}

$user = $_GET['data'] ?? '';
$someData = unserialize($user);

$app = new App();
$app->CheckSerives();