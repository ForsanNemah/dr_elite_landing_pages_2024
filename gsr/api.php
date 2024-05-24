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

  $json_array=removeDuplicateObjectsByPhoneNumber($json_array);

if(  $json_array==0){





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
        $date_and_time=str_replace('/', '/', $date_and_time);

        $a = new DateTime(".$date_and_time.");
        $b = new DateTime(".$from_date.");
        $c = new DateTime(".$to_date.");

        if (( $a >= $b and $a<=$c  and  strlen($phone)>=9    ) ){
            $customers_counter++;
            $sum_of_customers++;
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