<?php

namespace App\Model;
use PDO, PDOException;

class Database
{
    public $DBH;

    public function __construct()
    {
        try{
            $this->DBH = new PDO('mysql:host=localhost;dbname=atomic_20', "root", "");
            $this->DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch(PDOException $error){

           echo "Database Error: ". $error->getMessage();
        }
    }
}
