<?php
session_start();
echo $_SESSION['ScCid']." from session";


error_reporting(E_ERROR | E_PARSE);
ini_set('max_execution_time', '0');
include "info.php";



$name=$_POST['name'];
$phone=$_POST['phone'];
$phone=getLastNineCharacters($phone);
$email=$_POST['email'];
$service=$_POST['service'];
$is_w_app=$_POST['is_w_app'];
$source=$_POST['source'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];

$branch1=$_POST['branch1'];
$branch2=$_POST['branch2'];
$location=$_POST['location'];








$user_email_to_hash=$email;
$user_phone_to_hash=$phpne;
$user_click_id=$_SESSION['ScCid'];


if($snap_capi==1){	

	//include "capi_page_view.php";
	include "capi_signup.php";


	}
 

//die;



 








//echo  $branch1.$branch2;

if (!empty($branch1)) {

    $branch=$branch1;

    //echo "1 not empty ";
}
else{

    $branch=$branch2;
    //echo "1  empty ";
    
}
//$source="snap 1";

date_default_timezone_set("Asia/Riyadh");
$date = date('Y/m/d H:i:s');



$whatsapp_link="wa.me/966".$phone;
//echo $name.$phone.$is_w_app;




$postParameter = array(
    'date_and_time' => $date,
    'name' => $name,
    'phone' => $phone,
    'service' => $service,
    'whatsapp_link' => $whatsapp_link,
    'subject' => $subject,
    'msg' => $msg,
    'branch' => $branch,
    'location' => $location,
    'source' => $source
    
);



$curlHandle = curl_init($action_url);
curl_setopt($curlHandle, CURLOPT_POSTFIELDS, $postParameter);
curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, false);


include "check_if_registerd.php";

$sheet_id = getGoogleSheetId($sheet_url);

echo $phone."<br>"; 
echo $sheet_id."<br>"; 
///echo check_if_registered($phone,$sheet_id)."wwe";



if(1==2 ){

//echo "found";

}
else{

    //echo "not found ";
}

 
 
if(1==2){





    echo '<script type="text/javascript">

    var msg="هذا الرقم مسجل مسبقا ";   
 
 
 
            
 alert(msg);
 
 //window.history.go(-1);
 
 
 //window.location.replace("index.php");
 
 </script>
 
 ';




















}
else{









    
$curlResponse = curl_exec($curlHandle);
curl_close($curlHandle);


//echo "w_api start";

if($api_notification==1){
        
    $w_app_msg1="  لديك تسجيل  جديد  باسم  ".$name;
    $w_app_msg2=$w_app_msg1." برقم جوال ".$phone;
    
    $w_app_msg3=$w_app_msg2." خدمة   ".$service." ".$department_name;
    
    
    $w_app_msg3 = str_replace("\n", "\\n",  $w_app_msg2);
   

   

    if($pm_register==1){
        
$pm_msg1=" مرحبا ".$name;
$pm_msg2=$pm_msg1."  شاكرين تسجيلك معنا وفي حال كان لديك اي استفسار لا تتردد في السؤال";

    $result = send_with_wapi($wapi_token, $wapi_profile_id, '966'.$phone.'@c.us',$pm_msg2);

    
     print_r($result) ;

    }

     //$result = send_with_wapi($wapi_token, $wapi_profile_id, $phone_main.'@c.us',  $w_app_msg3);
    
     //print_r($result) ;


/*
     $result = send_with_wapi($wapi_token, $wapi_profile_id,$group_id.'@g.us',  $w_app_msg3);

print_r($result) ;

*/


}






if($group_notification==1){
        
    $w_app_msg1="  لديك تسجيل  جديد  باسم  ".$name;
    $w_app_msg2=$w_app_msg1." برقم جوال ".$phone;
    
    $w_app_msg3=$w_app_msg2." خدمة   ".$service." ".$department_name;

    /*
    echo $w_app_msg3;
    die;
    */
    
    
    $w_app_msg3 = str_replace("\n", "\\n",  $w_app_msg2);
    /*

    $result = send_with_wapi('9f9151b56d756354026b368ecc644edec19343b4', 'a0aca078-18a5', $phone_main.'@c.us',  $w_app_msg3);
    
     print_r($result) ;

*/

$result = send_with_wapi($wapi_token, $wapi_profile_id,$group_id.'@g.us',  $w_app_msg3);

echo print_r($result) ;

header("Location:https://api.whatsapp.com/send?phone=".$phone."&text=".urlencode(" 😊🫖☕ شكرا لزيارتكم ديوانية سجة بال ونتمنى انكم قد قضيتم وقتا ممتعا  وحياكم الله في أي وقت "));


}






//echo $curlResponse."";









if($is_w_app=="1"){


    
   
  

    header("Location:https://wa.me/".$phone_main);

}

else{



    echo '<script type="text/javascript">

   var msg=" تمت عملية التسجيل بنجاح وسيتم التواصل معك في اسرع وقت  ";   



           
//alert(msg);

//window.history.go(-1);


window.location.replace("done.php");

</script>

';

}


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
      CURLOPT_POSTFIELDS => 'auth='.$auth.'&profile_id='.$profileId.'&phone='.$phone.'&msg='.$message.'',
      CURLOPT_HTTPHEADER => array(
        'Content-Type: application/x-www-form-urlencoded',
        'Authorization: 9f9151b56d756354026b368ecc644edec19343b4'
      ),
    ));
    
    $response = curl_exec($curl);
    
    curl_close($curl);
    echo $response;
    
    
    
    
    
        }
        
        
         
     
        
function hash_to_256($input_string) {
    return hash('sha256', $input_string);
}





function getLastNineCharacters($text) {
    // Check if the string length is less than 9
    if (strlen($text) < 9) {
        return $text; // Return the entire string if it's shorter than 9 characters
    }
    // Return the last 9 characters
    return substr($text, -9);
}


?>