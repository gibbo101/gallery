<?php

require_once("config.php");

class Database
{

  public $connection;

  public function open_db_connection()
  {
    $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno()) 
    {
      die("Database connection error" . mysqli_error());
    }
  }
}


$database = new Database();

$databse->open_db_connection();