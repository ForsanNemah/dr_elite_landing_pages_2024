<?php




$w_app_msg5="test api";
$result = send_to_wapi("40703bb7812b727ec01c24f2da518c407342559c", "aedd0dc2-8453", "120363216158625125@g.us", $w_app_msg5);

if ($result['status_code'] == 200) {
    echo "Request successful. Response: " . $result['response'];
} else {
    echo "Request failed with status code: " . $result['status_code'] . ". Error: " . $result['response'];
}






function send_to_wapi($auth, $profile_id, $phone, $msg) {
    try {
        $url = "https://ads.2moh.net/wapi2024/?auth=$auth&profile_id=$profile_id&phone=$phone&msg=" . urlencode($msg);

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        
        curl_close($curl);
        
        return array(
            'status_code' => $httpCode,
            'response' => $response
        );
    } catch (Exception $e) {
        return array(
            'status_code' => 500,
            'response' => 'Error: ' . $e->getMessage()
        );
    }
}






?>