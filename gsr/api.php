

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>



<table>
  <tr>
    <th>الحملة</th>
    <th>عدد المسجلين</th>
    
    <th>     رابط الشيت</th>
     
  </tr>

<?php
 
 $from_date=$_POST['from'];
 $to_date=$_POST['to'];
 $sheet_id=$_POST['sheet_id'];

 echo  $from_date."<br>";
 echo  $to_date;


 /*

/*
 $a = new DateTime("10-9-2023 19:24:13");
 $b = new DateTime("10-9-2023 00:00:00");
 if ( $a>=$b){ 

    echo "yes";
 
     

} 

else{
    echo "no";
}
*/



 
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

// DUMP THE CURL-ERROR INFORMATION:
//var_dump(curl_error($curl));
curl_close($curl);
$json_array=json_decode($curl_response, TRUE);
//echo $curl_response;

foreach($json_array as $item) { //foreach element in $arr
  

    try {
        $customer_name = $item['customer_name']; //etc
        $sheet_link = $item['sheet_link']; //etc
        if(empty($sheet_link)) {
            continue;
             
        }


        //echo $customer_name;
        //echo $sheet_link."<br>";
        $sheet_link_1 = explode("/d/", $sheet_link);
        //echo $sheet_link_1[1]."<br>";

        $sheet_link_2 = explode("/", $sheet_link_1[1]);
        //echo $sheet_link_2[0]."<br>";

        get_sheet_data($sheet_link_2[0],$customer_name);
        //break;
    
      }
      
      //catch exception
      catch(Exception $e) {

        //echo $e;
        continue;
      }







}
 



















function get_sheet_data($sheet_id,$customer_name) {

  global  $from_date;
  global  $to_date;

    
    try {
       //echo $sheet_id."<br>";







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
    
    // DUMP THE CURL-ERROR INFORMATION:
    //var_dump(curl_error($curl));
    curl_close($curl);
    $json_array=json_decode($curl_response, TRUE);
    //echo $curl_response."<br>";

    //$today_date_just=date('j-n-Y');
    //echo   $today_date_just   ;
    //$today_date_and_time= date('j-n-Y',strtotime( $date . "-1 day"));

    //echo   $today_date_and_time   ;
    
    //$today_date_and_time=$today_date_and_time." 00:00:00";
    

    

    $customers_counter=0;
//$from_date="1-9-2023";
//$to_date="1-10-2023";

    foreach($json_array as $item) { 

        $date_and_time = $item['date_and_time'];
        $phone= $item['phone'];
        $date_and_time=str_replace('/', '-', $date_and_time);


        //echo $date_and_time."from sheet"."<br>";
        //echo  $today_date_and_time."today"."<br>";

        //echo $from_date."form";

       // echo "<br>";

        //echo $to_date."to";

        $a = new DateTime(".$date_and_time.");
        $b = new DateTime(".$from_date.");
        $c = new DateTime(".$to_date.");


//echo "<br>".$date_and_time."<br>";


//or(1==1 and  strlen($phone)>=9)
//$a >= $b and $a<=$c and  strlen($phone)>=9 
        if (( $a >= $b and $a<$c  and  strlen($phone)>=9    ) ){

            //echo "ok";
    $customers_counter++;
             
        
        } 
        else{
           // echo "no";
continue;

        }













        
       
  

    }
    



/*

   echo  $customer_name."\t". $customers_counter."
   
   
   
                          
   
   "."<br>";
   

*/

   echo "
   
   
   
   
   <tr>
   <td>". $customer_name."</td>
   <td>". $customers_counter."</td>
  

   <td>

   <a target='_blank' href='https://docs.google.com/spreadsheets/d/".$sheet_id."'>فتح</a>
 
   
   
   
   
   
   
   </td>
 </tr>
   
   
   
   
   
   ";
//echo "https://docs.google.com/spreadsheets/d/".$sheet_id."<br>";







    
      }
      
      //catch exception
      catch(Exception $e) {

        $customers_counter=0;
      }


     
  }

 
?>



</table>