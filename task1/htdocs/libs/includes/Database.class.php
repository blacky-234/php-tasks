<?php
class Database
{
    public static $conn = null;

    public static function getConnection()
    {
        if(Database::$conn == null)
        {
            $servername = "localhost:3306"; 
            $username = "task";
            $password = "task123#";
            $db_name = "task";
            $connection = new mysqli($servername, $username, $password, $db_name);
            if($connection->connect_error)
            {
                die("connection faild " . $connection->connect_error);
            } else {
                Database::$conn = $connection;
                return Database::$conn;
            }
        }else{
            return Database::$conn;
        }
    }
}