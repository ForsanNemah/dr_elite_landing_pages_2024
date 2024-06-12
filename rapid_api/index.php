<?php


$video_url=$_GET['video_url'];


$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://social-download-all-in-one.p.rapidapi.com/v1/social/autolink",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => json_encode([
		'url' => $video_url
	]),
	CURLOPT_HTTPHEADER => [
		"Content-Type: application/json",
		"x-rapidapi-host: social-download-all-in-one.p.rapidapi.com",
		"x-rapidapi-key: dcc7b7fd8dmsh8da6d4224fda168p15833ajsnec1f81fdf0a4"
	],
	CURLOPT_SSL_VERIFYPEER => false,
	CURLOPT_SSL_VERIFYHOST => false,
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo $response;

	$response = json_decode($response, true);
//$mediaUrl = $response['medias'][0]['url'];
$mediaUrl = $response['medias'][0]['url'];

echo  $mediaUrl;
}