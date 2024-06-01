<?php


function processString($input_string) {


    $final_date;
    $parts_0 = explode(" ", $input_string);
    //echo  $parts_0 [1]."time"."<br>";

    $parts = explode("/", $parts_0[0]);
    
    if (intval($parts[0]) < 2024) {
        $reversed_parts = array_reverse($parts);
        $final_date= implode("/", $reversed_parts)." ".$parts_0[1];
        return  $final_date;
    }
    
    // $final_date=$input_string.$parts_0 [1];
    return $input_string;
}



function split_time_string($time_string) {
    $time_parts = explode(":", $time_string);
    
    if (count($time_parts) === 3) {
        $hours = str_pad(intval($time_parts[0]), 2, "0", STR_PAD_LEFT);
        $minutes = str_pad(intval($time_parts[1]), 2, "0", STR_PAD_LEFT);
        $seconds = str_pad(intval($time_parts[2]), 2, "0", STR_PAD_LEFT);
        
        /*
        return array(
            "hours" => $hours,
            "minutes" => $minutes,
            "seconds" => $seconds
        );

*/
        return $hours.":".$minutes.":".$seconds;

    } else {
        return false;
    }
}
$time_string = "8:0:1";


$time_parts = split_time_string($time_string);
echo  $time_parts;

 
/*
$input_date = '15/2/2024 11:19:6';
$input_date2 = '2024/05/21 06:11:07';
echo  processString($input_date2 );
*/


?>