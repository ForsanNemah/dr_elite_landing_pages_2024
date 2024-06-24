<?php

session_start();
include "init.php";

$user_id=$_POST['user_id'];
$user_pass=$_POST['user_pass'];

echo $user_id; 
echo $user_pass; 

//echo ;

if(check_login($user_id,$user_pass)==1){


    echo "user found";
    $_SESSION['current_user_id'] =  $user_id;
    $_SESSION['current_user_pass'] =  $user_pass;

    header("Location: index.php");
}
else{

    echo "هذا المستخدم غير موجود ";








    echo '<script type="text/javascript">

    var msg=" هذا المستخدم غير موجود ";   
 
 
 
           
    




 alert(msg);
 
 //window.history.go(-1);
 
 window.history.go(-1);
 
 
 
 </script>
 
 ';


 



}


echo "current user id =". $_SESSION['current_user_id'] ;

?>