<?php
require_once 'vendor/autoload.php'; // Include the QRcode library

use Endroid\QrCode\QrCode;

$url = 'http://185.182.186.101:3000';

while (true) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

    $response = curl_exec($curl);
    curl_close($curl);

    // Generate QR code from the response
    $qrCode = new QrCode($response);
    $qrCode->setSize(300);

    // Save the QR code as an image file
    $imagePath = 'response_qr.png';
    $qrCode->writeFile($imagePath);

    // Display the image
    echo '<img src="' . $imagePath . '" alt="Response QR Code">';

    sleep(5); // Wait for 5 seconds before the next iteration
}
?>