<?php


include 'info.php';


//echo $sheet_url;
 $sheet_link_1 = explode("/d/", $sheet_url);
        $sheet_link_2 = explode("/", $sheet_link_1[1]);


//echo $sheet_link_2[0];





$pixel_api = 'https://opensheet.elk.sh/'.$sheet_link_2[0].'/pixels';

//echo $pixel_api;
$response = file_get_contents($pixel_api);
$keywords_content="";
$description="";
$counter=1;
if ($response !== false) {
    // Parse the response as JSON
    $data = json_decode($response, true);

    if ($data !== null) {
        // Loop through the rows and display key-value pairs
        foreach ($data as $row) {

            $snap = $row['snap'];

           if($counter==1){
            $snap = $row['snap'];

           }
           $counter++;
           
            
           
            //echo "keyword:". $keyword;
          
            //echo "<br>";
        }


      

        //echo   "<h dir='rtl'>$keywords_content</h>" ;
        //echo   "<h dir='rtl'>$description</h>" ;


echo '


 








<script type="text/javascript">

 

 



</script>











';

    } else {
        // Handle JSON parsing error
        echo 'Failed to parse the JSON response.';
    }
} else {
    // Handle error
    echo 'Failed to retrieve the response.';
}




?>