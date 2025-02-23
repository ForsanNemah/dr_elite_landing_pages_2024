<?php




$w_app_msg5="test api تجريب ";
$result = send_to_wapi("9f9151b56d756354026b368ecc644edec19343b4", "a0aca078-18a5", "120363216158625125@g.us", $w_app_msg5);

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