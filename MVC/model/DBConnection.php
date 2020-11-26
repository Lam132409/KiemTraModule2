<?php


namespace Product\Model;

namespace connected;

use PDO;


class DBConnection
{
    public $useName;
    public $password;
    public function __construct()
    {
        $this->useName = 'root';
        $this->password = '12345678';
    }
    public function connect(){
        $conn = null;
        try {
            $conn = new PDO("mysql:host=localhost;dbname=products",$this->useName,$this->password);
        } catch (PDOException $e){
            return $e->getMessage();
        }
        return $conn;
    }

}