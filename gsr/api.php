<!DOCTYPE html>
<html>
<head>
  <title>Table with Bootstrap 5.0.0</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
  <style>
    table {
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>


<?php

 
function processString($input_string) {


  $final_date;
  $parts_0 = explode(" ", $input_string);
  //echo  $parts_0 [1]."time"."<br>";

  $parts = explode("/", $parts_0[0]);
  
  if (intval($parts[0]) < 2024) {
      $reversed_parts = array_reverse($parts);
      
      $parts_0[1]=split_time_string($parts_0[1]);

      $only_date=fix_date(implode("/", $reversed_parts));

$final_date=$only_date." ".$parts_0[1];
      //$final_date= implode("/", $reversed_parts)." ".$parts_0[1];
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




function fix_date($input_string) {
  $parts = explode("/", $input_string);
  
  foreach ($parts as $key => $part) {
      if (strlen($part) < 2) {
          $parts[$key] = "0" . $part;
      }
  }
  
  return implode("/", $parts);
}

 

?>
</head>
<body>

<table class="table table-bordered">
  <thead>
    <tr>
    <th class="text-center"> المعرف</th>
      <th class="text-center">الحملة</th>
      <th class="text-center">عدد المسجلين</th>
      <th class="text-center">رابط الشيت</th>
      <th class="text-center"> رابط صفحة الهبوط</th>
    </tr>
  </thead>
  <tbody>

<?php
 
 ini_set('max_execution_time', 600); 

 $from_date=$_POST['from'];
 $to_date=$_POST['to'];
 $sheet_id=$_POST['sheet_id'];

 ///echo  $from_date."<br>";
 //echo  $to_date;

 echo "<br>";


 echo '
 
 
 
 
 
 
 <div class="d-flex justify-content-center">
   <div>'.$from_date.'</div>
 
</div>
 


<div class="d-flex justify-content-center">
 
<div>'.$to_date.'</div>
</div>

 
 
 
 

<div class="d-flex justify-content-center">
 
 
</div>

 
 
 
 
 ';
 error_reporting(E_ERROR | E_WARNING | E_PARSE);
 error_reporting(E_ERROR | E_PARSE);
 

 //$today_date_and_time=  date('d/m/Y H:i:s');

 //echo $today_date_and_time."<br>";

 

 $defaults = array(
    CURLOPT_URL             => 'https://opensheet.elk.sh/'.$sheet_id.'/Sheet1',
    CURLOPT_POST            => false,
    CURLOPT_HEADER          => false,
    CURLOPT_SSL_VERIFYPEER  => false,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_SSL_VERIFYHOST  => false,
);
$curl               = curl_init();
curl_setopt_array($curl, $defaults);
$curl_response      = curl_exec($curl);
$json_objekat       = json_decode($curl_response);
curl_close($curl);
$json_array=json_decode($curl_response, TRUE);





$sheets_count=1;
$sum_of_customers=0;

foreach($json_array as $item) {


  
    try {
        $customer_name = $item['branch'];
        $sheet_link = $item['sheet'];
        $landing_page = $item['landing_page'];
        
        if(empty($sheet_link)) {
            continue;
             
        }

        $sheet_link_1 = explode("/d/", $sheet_link);
        $sheet_link_2 = explode("/", $sheet_link_1[1]);

        get_sheet_data($sheet_link_2[0],$customer_name,$landing_page);
        $sheets_count++;
    
      }
      
      //catch exception
      catch(Exception $e) {
        continue;
      }

}


echo '

<div class="d-flex justify-content-center">
 
<div>'.$sum_of_customers.'</div>
</div>


';

function get_sheet_data($sheet_id,$customer_name,$landing_page) {
  global  $from_date;
  global  $to_date;
  global  $sheets_count;
  global  $sum_of_customers;
  $uniqe_phones = array();
  array_push($uniqe_phones,"966568430828");
    
    try {
       $defaults = array(
        CURLOPT_URL             => 'https://opensheet.elk.sh/'.$sheet_id.'/Sheet1',
        CURLOPT_POST            => false,
        CURLOPT_HEADER          => false,
        CURLOPT_SSL_VERIFYPEER  => false,
        CURLOPT_RETURNTRANSFER  => true,
        CURLOPT_SSL_VERIFYHOST  => false,
    );
    $curl               = curl_init();
    curl_setopt_array($curl, $defaults);
    $curl_response      = curl_exec($curl);
    $json_objekat       = json_decode($curl_response);
    curl_close($curl);
    $json_array=json_decode($curl_response, TRUE);

    //print_r( removeDuplicateObjectsByPhoneNumber($json_array) );

  //$json_array=removeDuplicateObjectsByPhoneNumber($json_array);

if(  array_key_exists('error', $json_array)  ){


// $json_array==0


  echo "
  <tr>

  
  <td class='text-center'>".$sheets_count."</td>
    <td class='text-center'>". $customer_name."</td>
    <td class='text-center'>محمي </td>
    <td class='text-center'>
      <a target='_blank' href='https://docs.google.com/spreadsheets/d/".$sheet_id."'>فتح</a>
    </td>




    <td class='text-center'>
      <a target='_blank' href='".$landing_page."'>فتح</a>
    </td>


  </tr>
  ";






  
  return;

}
  

    $customers_counter=0;

    foreach($json_array as $item) {








      try {


       


        $date_and_time = $item['date_and_time'];
        $phone= $item['phone'];
        //$date_and_time=str_replace('/', '/', $date_and_time);
        $date_and_time=str_replace('  ', ' ', $date_and_time);


        /*
        echo "<br>";
        echo   $date_and_time."       ";
   */
        

        $date_and_time=processString($date_and_time);


/*

echo   $date_and_time."after";

echo "<br>";

*/










        $a = new DateTime(".$date_and_time.");
        $b = new DateTime(".$from_date.");
        $c = new DateTime(".$to_date.");


        //echo "<br>" . $a->format('Y/m/d H:i:s') . "<br>";
        //echo "<br>" . $b->format('Y/m/d H:i:s') . "<br>";
        //echo "<br>" . $c->format('Y/m/d H:i:s') . "<br>";



        if (( $a >= $b and $a<=$c  and  strlen($phone)>=9    ) ){
          //echo "<br> in <br>";

         


          
//echo "<br> phone=".$phone."<br>";

        

          if (in_array($phone, $uniqe_phones)) {
            //echo "Item 'item4' exists in the array.";
        } else {
          array_push($uniqe_phones,$phone);
          $customers_counter=$customers_counter+1;
          $sum_of_customers=$sum_of_customers+1;
        }

        

/*
        
        $customers_counter=$customers_counter+1;
        $sum_of_customers=$sum_of_customers+1;
*/






           

        } 
        else{
            continue;
        }


        
      }
      
      //catch exception
      catch(Exception $e) {

        continue;
        
      }
  













      
      
      
    }

    //var_dump($uniqe_phones);



   echo "
   <tr>

 
   <td class='text-center'>".$sheets_count."</td>
     <td class='text-center'>". $customer_name."</td>
     <td class='text-center'>". $customers_counter."</td>
     <td class='text-center'>
       <a target='_blank' href='https://docs.google.com/spreadsheets/d/".$sheet_id."'>فتح</a>
     </td>




     <td class='text-center'>
     <a target='_blank' href='".$landing_page."'>فتح</a>
   </td>




   </tr>
   ";
    
      }
      
      //catch exception
      catch(Exception $e) {
        $customers_counter=0;
      }
  }

?>

  </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>










<?php


function removeDuplicateObjectsByPhoneNumber($array) {
  // Step 1: Remove duplicate objects by phone number
 








  try {  
    
    $uniqueArray = [];
    $phoneNumbers = [];
  
    foreach ($array as $object) {


      if (  isset($object['error'])   )  
        
      {

        echo "error";
      
break;

      }

        $phoneNumber = $object['phone'];
  
        if (!in_array($phoneNumber, $phoneNumbers)) {
            $uniqueArray[] = $object;
            $phoneNumbers[] = $phoneNumber;
        }
    }
  
    // Step 2: Return the unique array
    return $uniqueArray;

    

}   
        //catch block  
catch (TypeError $e) {  
    return 0;

    echo "error rd";
}  







}



?>