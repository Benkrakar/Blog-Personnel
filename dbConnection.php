<?php
$dsn='mysql:host=localhost;dbname=benkrakarblog';
$username= "root";
$password= "";
try{
    $conn=new PDO($dsn,$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        // echo 'done';
    } catch (PDOException $e)  {
        echo 'ERR :'. $e->getMessage();
    }
    
    include_once'person.php';
    $person = new PersonDB($conn);
    
?>
