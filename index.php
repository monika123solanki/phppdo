<?php
 require_once 'includes/config.php';
 require_once 'includes/database.php';

 ?>

 <?php
    // print_r(PDO::getAvailableDrivers());    shows all drivers

    $object = new Database;
    echo $object->connect();


 ?>