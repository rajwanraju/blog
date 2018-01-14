<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/14/2018
 * Time: 12:01 PM
 */

namespace App\classes;
use App\classes\Database;

class Application
{

    public function getAllPublishedBlogInfo(){


        $sql = "SELECT * FROM blog WHERE status= 1";

        if(mysqli_query(Database::dbConnection(),$sql)){

          $queryResult =  mysqli_query(Database::dbConnection(),$sql) ;

            return $queryResult;
        }
        else{
            die("Query problem".mysqli_error(Database::dbConnection()));
        }


    }

}