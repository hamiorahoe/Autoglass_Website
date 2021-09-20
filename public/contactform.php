<?php

    error_log("WORKING");
    if($_POST["name"]){
        $message =  "Name: " . $_POST['name'] . PHP_EOL . 
        "Company Name: " . $_POST['company_name'] . PHP_EOL . 
        "Phone: " . $_POST['phone'] . PHP_EOL . 
        "Rego: " . $_POST['rego'] . PHP_EOL . 
        "Repair: " . $_POST['repair'] . PHP_EOL . 
        "Location: " . $_POST['location'] . PHP_EOL;
    
        mail('samuel.j.cribb@gmail.com', 'NEW WEBSITE QUERY',
            $message, 'From: ' . $_POST['email']);
        echo("Email sent. Thank you");
    }
?>