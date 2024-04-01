<?php

error_reporting(E_ERROR | E_PARSE);

include "info.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$service=$_POST['service'];
$is_w_app=$_POST['is_w_app'];
$source=$_POST['source'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];

//$source="snap 1";

date_default_timezone_set("Asia/Riyadh");
$date = date('Y/m/d H:i:s');



$whatsapp_link="wa.me/966".$phone;
echo $name.$phone.$is_w_app;




$postParameter = array(
    'date_and_time' => $date,
    'name' => $name,
    'phone' => $phone,
    'service' => $service,
    'whatsapp_link' => $whatsapp_link,
    'subject' => $subject,
    'msg' => $msg,
    'source' => $source
    
);

$curlHandle = curl_init($action_url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
$curlResponse = curl_exec($curlHandle);
curl_close($curlHandle);


//echo $curlResponse."";









if($is_w_app=="1"){


    header("Location:https://wa.me/".$phn);

}

else{



    echo '<script type="text/javascript">

   var msg=" تمت عملية التسجيل بنجاح وسيتم التواصل معك في اسرع وقت  ";   



           
alert(msg);

//window.history.go(-1);


window.location.replace("index.php");

</script>

';

}

























?>