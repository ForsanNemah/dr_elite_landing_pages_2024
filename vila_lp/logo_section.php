
<section class="container-fluid bg-primary head-nav">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6">
                <div class="text-center header-logo">
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="logo">
                         





                        <?php


if ($handle = opendir('logo')) {


    while (false !== ($entry = readdir($handle))) {

        if ($entry != "." && $entry != "..") {

 

  
  //echo "$entry\n";
  echo "
  
  
  
  <img   src='logo/$entry' class='img-fluid' alt='Responsive image' width='".$logo_w."' height='".$logo_h."' >
  

  
  ";
  
  
  break;
 

 
           
        }
    }

    closedir($handle);
}




?>











                        <h3 class="text-dark" style="font-size:1.2em!important">
                        
                        <?php

include 'info.php';

include 'pop_up_form.php';


echo "  <h4 style='color:black'  >".$info['ev_logo_name']."</h4>";
//include 'banners.php';
echo "  <h4 style='color:black' > ".$dr_name."</h4>";
echo "  <h2 style='color:green'    >".$add_title." </h2>";
echo " 


<button type='button' class='btn btn-primary'  >


<a href='https://fladolce.com/index.php?route=common/home'>

<h3 style='color:white'   > طلب عبر المتجر الالكتروني </h3>
</a>


</button>
<br>
<br>

<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#exampleModal'>


<h3 style='color:white' class='pulsate'  > احصل على كود خصم من هنا  </h3>

</button>


<br>
<br>
<br>
<br>


 
";

 
$sn=$_SERVER['SCRIPT_FILENAME'];

$current_script_file=explode("/",$sn);
//print_r($current_script_file);
 

 if(end($current_script_file)=="index.php"){
    //echo " <img   src='bn.jpeg' class='img-fluid' alt='Responsive image'    ' >";
    //echo "  <h3><a style='color:blue'  href='index_map_1.php'>موقعنا على الخريطة( فرع الخبر ) </a></h3>";
    //echo "<br>";
    //echo "<br>";
    //echo "  <h3><a style='color:blue'  href='index_map_2.php'>موقعنا على الخريطة( فرع الدمام ) </a></h3>";

 }


?>
                  
                  
                      </h3>
                     
                      <br>

                      <?php
if($sliders==1){
echo "


<a href='#slider_1' style=' color: blue;'> الاطلاع على خدماتنا وعروضنا </a>



";

}

 
                      ?>


                      
                      <br>
                      <br>
                      <br>



                      <
                    </div>
                </div>
            </div>

        </div>
    </section>



    <style>

























    </style>