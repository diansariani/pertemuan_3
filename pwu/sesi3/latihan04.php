<?php
    //Model Array 1
    //$cars = array("volvo", "BMW", "Toyota");

    //Model Array 2
    $cars[0] = "Volvo";
    $cars[1] = "BMW";
    $cars[2] = "Toyota";
    
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($cars);
    