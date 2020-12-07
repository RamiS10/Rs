<?php
    
    ob_start(); //used to process the output buffer.Also Adds security
    session_start();

    $timezone = date_default_timezone_set("Asia/Beirut");

    $con = mysqli_connect("localhost", "root", "", "Pharmaprix");

    if(mysqli_connect_errno()){
        echo "Failed to connect: " . mysqli_connect_errno(); 
    }

    
    
    
    
    
    
    
    
    ?>