<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);

$url = 'https://opensheet.elk.sh/1O-C0bChWXoJFJtSez84Kksg7IpT5tlyZAavIDuc7M3g/Sheet2';
 
$contract_date;
$contract_id;
$contract_date_h;
$company_name;
$company_id;
$address;
$customer_name;
$email;
$phone;
$cost;
$cost_string;
try {
    $response = file_get_contents($url);

    if ($response !== false) {
        // Parse the response as JSON
        $data = json_decode($response, true);

        if ($data !== null) {
            // Loop through the rows and display key-value pairs


            foreach ($data as $row) {
                $contract_date = $row['contract_date'];
                $contract_id = $row['contract_id'];
                $contract_date_h = $row['contract_date_h'];
                $company_name = $row['company_name'];
                $company_id = $row['company_id'];
                $address = $row['address'];
                $customer_name = $row['customer_name'];
                $email = $row['email'];
                $phone = $row['phone'];
                $cost = $row['cost'];
                $cost_string = $row['cost_string'];
                //echo "".$service.$des. $status."<br>";


               
              

                //echo "<br>";
                
 
            }

            $keywords_content = rtrim($keywords_content, ',');

      
        } else {
            // Handle JSON parsing error
            throw new Exception('Failed to parse the JSON response.');
        }
    } else {
        // Handle error
        throw new Exception('Failed to retrieve the response.');
    }
} catch (Exception $e) {
    // Handle exceptions
    //echo 'Error: ' . $e->getMessage();
}