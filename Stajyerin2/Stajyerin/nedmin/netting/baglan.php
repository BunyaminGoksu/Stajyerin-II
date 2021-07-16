<?php


try{

    $db=new  PDO("mysql:host=localhost;dbname=stajyerin;charset=utf8",'root','12345678');
  

}


catch(PDOException $e){

    echo $e->getMessage();
}


?>