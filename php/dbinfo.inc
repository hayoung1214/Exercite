<?php
    $host='localhost';
    $user='team10';
    $password='team10';
    $dbname='team10';

    $conn=new mysqli($host, $user, $password, $dbname);
    if($conn){
        echo 'sucess mysql connect</p>';
    }
    else{
        echo '<p>Error: Could not connect to database.<br/> Please try agin later.</p>';
        exit;
    }
?>