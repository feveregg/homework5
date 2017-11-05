<?php
    
    //Bug Report
    ini_set('display_errors', 'On');
    error_reporting(E_ALL);

    

    $dsn = 'mysql:dbname=wk45;host=sql1.njit.edu';
    $user = 'wk45';
    $password = 'AmCb81UGG';



    try {

    	$dbh = new PDO($dsn, $user, $password);
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'Connected successfully<br>'

        } catch (PDOException $e) {
        
            echo 'Connection failed: ' . $e->getMessage();

        }	



    $sql = "SELECT * FROM accounts WHERE id<6";


    
    


















?>
