<?php




$w_app_msg5="test api تجريب ";
$result = send_to_wapi("40703bb7812b727ec01c24f2da518c407342559c", "aedd0dc2-8453", "120363216158625125@g.us", $w_app_msg5);

if ($result['status_code'] == 200) {
    echo "Request successful. Response: " . $result['response'];
} else {
    echo "Request failed with status code: " . $result['status_code'] . ". Error: " . $result['response'];
}




function send_to_wapi($auth, $profileId, $phone, $message) {
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
        CURLOPT_POSTFIELDS => http_build_query(array(
            'auth' => $auth,
            'profile_id' => $profileId,
            'phone' => $phone,
            'msg' => $message
        )),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: ' . $auth
        ),
    ));

    $response = curl_exec($curl);

    if (curl_errno($curl)) {
        $error = curl_error($curl);
        curl_close($curl);
        return array('error' => $error);
    }

    $statusCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    return array(
        'status_code' => $statusCode,
        'response' => $response
    );
}



?>