<?php
error_reporting(E_ERROR | E_PARSE);

 
//$ad_source=echo "<script> alert(""); </script>";

 
$action_url="https://script.google.com/macros/s/AKfycbxWvDNwtE6X1-JHRBpZVB5t1nC1Hk84_Vl84yAjjlJHVmFhsLD_4iJ3TLe311BK3dOZ7g/exec";

$logo_h='120px';
$logo_w='120px';
$address=" 


 

";
$email="info@wmc-ksa.com";
$form_bg_color="#8C730C";
$bg_image="asnan.jpg";
$sliders=0;
$add_source="snap 1  ";
$phn="966540889195";
$phn2="966564756555";
$phn0="966564756555";
$end_date="20-3-2023";
$end_time="12:00";
$insta_url="https://www.instagram.com/dr.kareem_asran/";
$snap_url="https://www.instagram.com/dr.eman_elsharkawy/?hl=ar";
$gmap_url="https://goo.gl/maps/S1Zko9MvKiYzqPQV9";

$site_name="     مجمع ناس2        ";
$dr_name=
"
 
";
$add_title="50% خصومات تصل الى ";

$sidebar1_msg="نحلم ونحقق";
$sidebar2_msg="خدماتنا ";
$sidebar3_msg="خدماتنا ";



$full_map_url='



<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3604.3445546944045!2d49.574740299999995!3d25.3932747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e3796f8b88de12d%3A0xf490922ee97d0043!2z2YXYs9iq2YjYtdmBINmG2KfYsyDZhNi32Kgg2KfZhNij2LPZhtin2YY!5e0!3m2!1sar!2ssa!4v1710648277606!5m2!1sar!2ssa" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>







';












//echo "<script> alert('".$gmap_url."'); </script>";

 





try {



    $items = array();



$handle = fopen("services.txt", "r");
if ($handle) {
$i=0;
    while (($line = fgets($handle)) !== false) {
        //echo $line."<br>".$i; 
$i++;
$items['Peter'.$i]=$line;


    }

    fclose($handle);
}






    $items_branches = array();



$handle = fopen("branches.txt", "r");
if ($handle) {
$i=0;
    while (($line = fgets($handle)) !== false) {
        //echo $line."<br>".$i; 
$i++;
$items_branches['Peter'.$i]=$line;


    }

    fclose($handle);
}


















 


$info = array(

    

    "website_title"=>$site_name,
     "sub1"=>"      الحمزة للسيارات  ",
    "sub2"=>"أفضل عروض شانجان - شانجان جديدة بأفضل سعر   
      ",

    "counter_message"=>"     احجز قبل انتهاء العداد للحصول على العروض          ",



 "sidebar1_msg"=>$sidebar1_msg,
 "sidebar2_msg"=>$sidebar2_msg,
 "sidebar3_msg"=>$sidebar3_msg,

    "form_sub1"=>"               ",
    "form_sub2"=>"      ",


 
    "ev_logo_name"=>
    $site_name
    ,



    
    "ev_form_sub1"=>"    
    املأ النموذج الآن
    
    ",


    "ev_form_sub2"=>"    
    
واحصل على العروض
    ",


    
    "lt_sub1"=>"    
    

 
    ",


    "lt_sub2"=>"    

 

    تتوفر خدمة التقسيط على دفعات



 
    ",




);


//echo "Peter is " . $age['Peter'] . " years old.";













$cats1 = array(

    "item0"=>"نساء   ",

    "item1"=>"رجال",
 





);


    
  } catch(Exception $e) {
    
  }





















 

$website_des="





 


";



$footer_info="

يتكون فريقنا من استشاريين ومتخصصين ذوي مهارات عالية يقدمون الخدمات الطبية المتاحة الأكثر تقدمًا.


";


$about="


عيادات متخصصه في طب الاسنان والجراحه والتجميل
 


";


?>