<?php


if(isset($_POST ['submit'])){

    $temperature = $_POST['temperature'];
    $units = $_POST['units'];
    $float = $_POST['float'];

    if ($units == "C"){
        $result = $temperature * 9 / 5 + 32;
    } else {
        $result = ($temperature - 32) *5 / 9;
    } 
    //die ($result); die stops execution its the same as exit
    //number_format() four parameters number_format(number,decimals,decimalpoint,separator)


    if ($float == "one"){
        $result = number_format($result, 1, '.', ' ');
    } else {
        $result = number_format($result, 2, '.', ' ');
    }
    echo "The temperature is " . $result;

}
