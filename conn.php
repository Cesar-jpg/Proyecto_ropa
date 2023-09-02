<?php
    $user = "root";
    $pass = "";
    try {
        $con = new PDO('mysql:host=localhost;dbname=segunda_vuelta',$user,$pass);
    } catch (PDOException $e) {
        print "Error: " . $e->getMessage() . "<br/>";
        die(); 
    }
?>