<?php

class Database
{
  private $server;
  private $username;
  private $password;
  private $database;

  public function connect()
  {
    include(__DIR__.'/../../enviornment.php');
    $this->server = $env_server;
    $this->username = $env_username;
    $this->password = $env_password;
    $this->database = $env_database;
    
    $conn = new mysqli($this->server, $this->username, $this->password, $this->database,);
    return $conn;
  }
}
?>