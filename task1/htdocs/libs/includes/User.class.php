<?php
require_once "Database.class.php";
class User
{
    private $conn;

    public static function everify($email)
    {
        $sql = "SELECT * FROM `register` WHERE `email` = '$email'";
        $conn = Database::getConnection();
        $result = $conn->query($sql);
        // echo $result; email->1>0 
        // exit;
        if ($result->num_rows > 0) {
            return false;
        } else {
            return true;
        }
    }

    public static function regis($name, $email, $age, $dob, $address, $qual)
    {
        $conn = Database::getConnection();
        $sql = "INSERT INTO `register`(`name`, `email`, `age`, `dob`, `address`, `qualifiacation`, `reg_time`)
                            VALUES('$name', '$email', '$age','$dob', '$address', '$qual', now());";
        $error = false;
        if ($conn->query($sql) == true) {
            $error = true;
        } else {
            $error = $conn->$error;
        }
        return $error;
    }

    public static function getUsers()
    {
        $array = array();
        $db = Database::getConnection();
        $sql = "SELECT * FROM `register`";
        $result = $db->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
}
