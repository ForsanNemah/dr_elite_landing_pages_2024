<?php 



$location=$branch;

$location = str_replace(["\n", "\r", "\t"], '', $location); // Remove newlines, carriage returns, and tabs
$location = preg_replace('/\s+/', ' ', $location); // Normalize whitespace

echo $location;


if (trim($location) == "رويال العقربيه") {



    $phone_main="966507377601";

} else {
    echo "The string does not match!";
}





if (trim($location) == "رويال شارع الببسي") {



    $phone_main="966556993200";

     
} else {
    echo "The string does not match!";
}



if (trim($location) == "فرع الاتصالات") {



    $phone_main="966533589200";

     
} else {
    echo "The string does not match!";
}




if (trim($location) == "فرع الشاطئ") {



    $phone_main="966554085444";

     
} else {
    echo "The string does not match!";
}



//echo $phone_main;
//die;



?>