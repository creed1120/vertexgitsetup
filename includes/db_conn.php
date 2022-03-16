<?php

    // Connect to the phpMyAdmin Database
    $host = "localhost";
    $userName = "root";
    $database = "vertexgitsetup_mb2";
    $password = "";

    $mysqli = new mysqli($host, $userName, $password, $database);

    if ($mysqli->connect_error) { 
        die("Failed to connect: " . $mysqli->connect_error);
      } 