<?php

error_reporting(E_ERROR | E_PARSE);
ini_set('max_execution_time', '0');
include "info.php";
include "init.php";

$name=$_POST['name'];
$des=$_POST['des'];
$files_url=$_POST['files_url'];
$is_w_app=$_POST['is_w_app'];
$source=$_POST['source'];
$task_sender_name=$_POST['task_sender_name'];
$emp_name=$_POST['emp_name'];
$branch=$_POST['branch'];
$time=$_POST['time'];

$userInfo_sender= getUserById($task_sender_name);
$userInfo_reciver= getUserById($emp_name);
//$source="snap 1";

date_default_timezone_set("Asia/Riyadh");
$date = date('Y/m/d H:i:s');



$whatsapp_link="wa.me/966".$phone;
echo $name.$phone.$is_w_app;




$postParameter = array(
    'date_and_time' => $date,
    'name' => $name,
    'des' => $des,
    'files_url' => $files_url,
    'whatsapp_link' => $whatsapp_link,
    'task_sender_name' => $userInfo_sender["name"],
    'emp_name' => $userInfo_reciver['name'],
    'branch' => $branch,
    'time' => $time,
    'source' => $source
    
);






//echo "w_api start";



if(1==1){

    //$action_url="https://script.google.com/macros/s/AKfycbx5AQiVvF8GlzMv6QQFh1_HlxvA2b5Egh4_lpYTG9vCrFCf_zdAxPGnrISYZPAZjhDl/exec";
        


   
    $action_url= $userInfo_reciver['gs_api'];

    //echo $action_url."action url ";
    //die;

    $curlHandle = curl_init($action_url);
    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);
    $curlResponse = curl_exec($curlHandle);
    curl_close($curlHandle);








    $w_app_msg1=" مهمة جديدة  بعنوان  "."/".$name."";
    $w_app_msg2=$w_app_msg1." مسند المهمة"." /".$userInfo_sender['name']."";
    $w_app_msg3=$w_app_msg2." مستلم المهمة"."/".$userInfo_reciver['name']."";
    $w_app_msg4=$w_app_msg3."وصف المهمة"."/".$des."";
    $w_app_msg5=$w_app_msg4."  الزمن الازم" ."/".$time." دقيقة"."";
    


 

 

$result = send_with_wapi('40703bb7812b727ec01c24f2da518c407342559c', 'aedd0dc2-8453', '120363216158625125@g.us',  $w_app_msg5);

echo print_r($result) ;



$result = send_with_wapi('40703bb7812b727ec01c24f2da518c407342559c', 'aedd0dc2-8453', $userInfo_reciver['phone']."@c.us", $w_app_msg5);



 
 

 




    //send_w_app_msg_groups("120363216158625125",$w_app_msg5,"2000");
    //send_w_app_msg($userInfo_reciver['phone'],$w_app_msg5,"2000");
    //split_by_hyphen($w_app_msg4);












    echo '<script type="text/javascript">

    var msg="تمت العملية بنجاح ";   
 
 
 
           
    




 alert(msg);
 
 //window.history.go(-1);
 
 //window.history.go(-1);
 
 //window.location.replace("https://almeswak.ksa-ads.com/34laban/dental/snap/done.php");
 
 </script>
 
 ';






}
else{

    echo " not mohaned";

}



















if($api_notification==1){
        
    $w_app_msg1="  لديك تسجيل  جديد  باسم  ".$name;
    $w_app_msg2=$w_app_msg1." برقم جوال ".$phone;
    
    send_w_app_msg($phone_main,$w_app_msg2,"2000");

}



//echo $curlResponse."";









if($is_w_app=="1"){

    if($api_notification==1){
        
        $w_app_msg1="  لديك تسجيل  جديد  باسم  ".$name;
        $w_app_msg2=$w_app_msg1." برقم جوال ".$phone;
        
        send_w_app_msg($phone_main,$w_app_msg2,"2000");
    
    }

    header("Location:https://wa.me/".$phone_main);

}

else{



  

}





















function send_w_app_msg($phone,$msg,$token) {

 
    

echo "w_api start 2";




 





















//echo $phone.$msg.$token;



/*
    $postParameter = array(
        
        
        'phn' => $phone,
        'token' => $token,
        'msg' => $msg
        
    );

    */


    $postParameter="phn=".$phone."&msg=".$msg."&token=".$token;
    
    $curlHandle = curl_init("http://alamerms.com/send-text");
    curl_setopt($curlHandle, CURLOPT_POST, true);
    curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
    curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($curlHandle, CURLOPT_PORT, 2000);
    curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT, 0); 

    $curlResponse = curl_exec($curlHandle);
    echo $curlResponse."res";
    curl_close($curlHandle);


    //print_r(curl_getinfo($curlHandle));

    if(curl_errno($curlHandle)){
        echo 'Curl error: ' . curl_error($curlHandle);
    }
    
  }







































  function send_w_app_msg_groups($phone,$msg,$token) {


    

    echo "w_api start 2";
    
    
    
    
     
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    //echo $phone.$msg.$token;
    
    
    
    /*
        $postParameter = array(
            
            
            'phn' => $phone,
            'token' => $token,
            'msg' => $msg
            
        );
    
        */
    
    
        $postParameter="phn=".$phone."&msg=".$msg."&token=".$token;
        
        $curlHandle = curl_init("http://alamerms.com/send-text-group");
        curl_setopt($curlHandle, CURLOPT_POST, true);
        curl_setopt($curlHandle, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
        curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER,false);
        curl_setopt($curlHandle, CURLOPT_PORT, 2000);
        curl_setopt($curlHandle, CURLOPT_CONNECTTIMEOUT, 0); 
    
        $curlResponse = curl_exec($curlHandle);
        echo $curlResponse."res";
        curl_close($curlHandle);
    
    
        //print_r(curl_getinfo($curlHandle));
    
        if(curl_errno($curlHandle)){
            echo 'Curl error: ' . curl_error($curlHandle);
        }
        
      }





      function split_by_hyphen($input_string,$msg) {
        $parts = explode("-", $input_string);
        
        /*
        foreach ($parts as $part) {
            echo $part . "\n";
        }
        */
        
        echo  $parts[1];

        send_w_app_msg($parts[1],$msg,"2000");
    }














    function send_with_wapi($auth, $profileId, $phone, $message) {
        $curl = curl_init();
    
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://ads.2moh.net/wapi2024/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => http_build_query([
                'auth' => $auth,
                'profile_id' => $profileId,
                'phone' => $phone,
                'msg' => $message
            ]),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: ' . $auth
            ),
        ));
    
        $response = curl_exec($curl);
    
        if ($response === false) {
            $error = curl_error($curl);
            curl_close($curl);
            return $error;
        }
    
        $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        curl_close($curl);
    
        return [
            'status_code' => $statusCode,
            'response' => $response
        ];
    }

?>