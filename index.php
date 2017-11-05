<?php
    
    //Bug Report
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    

    //Set Connection
    $dsn = 'mysql:dbname=wk45;host=sql1.njit.edu';
    $user = 'wk45';
    $password = 'AmCb81UGG';


    try {

    	$dbConn = new PDO($dsn, $user, $password);
        $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connected successfully<br>';

        } catch (PDOException $e) {
        
            echo 'Connection failed: ' . $e->getMessage() . '<br>';

        }	




    try {
  
         $stmt = $dbConn->prepare("SELECT * FROM accounts where id<6");
	     $stmt->execute();   
         $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
         $result = $stmt->fetchAll();

    } catch (PDOException $e) {

        echo $sql . "<br>" . $e->getMessage();
 
    }

   
    $number = print_r(count($result));
    echo ' results found! <br>';
    

     





















?>
