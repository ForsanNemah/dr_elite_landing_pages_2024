<?php

 
include "info.php";

$name=$_POST['name'];
$phone=$_POST['phone'];
$date = date('Y/m/d H:i:s');


echo $name.$phone;










$postParameter = array(
    'date_and_time' => $date,
    'name' => $name,
    'phone' => $phone
    
);

$curlHandle = curl_init($action_url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
$curlResponse = curl_exec($curlHandle);
curl_close($curlHandle);


//echo $curlResponse."";


echo '<script type="text/javascript">

   var msg="f24 كود الخصم الخاص بك هو \n يمكنك استخدامة  عند زيارتك  لنا";   



           
alert(msg);



location.replace("https://api.whatsapp.com/send?phone=966543590581&text=%D9%85%D8%A7%D9%87%D9%8A%20%D8%B7%D8%B1%D9%8A%D9%82%D8%A9%20%D8%A7%D8%B3%D8%AA%D8%AE%D8%AF%D8%A7%D9%85%20%D9%83%D9%88%D8%AF%20%D8%A7%D9%84%D8%B9%D8%B1%D8%B6%20%20%F0%9F%98%80");
//window.history.go(-1);
 
</script>

';


















?>