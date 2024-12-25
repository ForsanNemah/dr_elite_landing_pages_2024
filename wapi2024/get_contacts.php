<?php

function printContactsInTable() {
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://wappi.pro/api/sync/contacts/get?profile_id=29024944-adfb',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => json_encode(array(
            "pixel_id" => "77ec2e1e-c2bb-468f-8d2e-f99b7ec9983c",
            "timestamp" => "1735134829",
            "event_conversion_type" => "WEB",
            "event_type" => "SIGN_UP",
            "hashed_email" => "8c2a47d3bdb8d3096a6479f53eac3b724291db5f1c31611100f675be5537329d",
            "hashed_phone_number" => "8c2a47d3bdb8d3096a6479f53eac3b724291db5f1c31611100f675be5537329d",
            "hashed_ip_address" => "8c2a47d3bdb8d3096a6479f53eac3b724291db5f1c31611100f675be5537329d",
            "user_agent" => "Mozilla/5.0 (Macintosh; Intel Mac OS X x.y; rv:42.0) Gecko/20100101 Firefox/42.0",
            "device_model" => "iPhone12Pro",
            "click_id" => "7b3a7917-a82a-47e8-9728-e1b3b045abb2"
        )),
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: 40703bb7812b727ec01c24f2da518c407342559c'
        ),
    ));

    $response = curl_exec($curl);
    $error = curl_error($curl);

    curl_close($curl);

    if ($error) {
        echo "cURL Error: " . $error;
    } else {
        $data = json_decode($response, true);
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
            <title>Contacts Table</title>
        </head>
        <body>
        <div class="container mt-5">
            <h2 class="mb-4 text-center">Contacts</h2>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Number</th>
                    </tr>
                </thead>
                <tbody>';
        
        if (isset($data['contacts']) && is_array($data['contacts'])) {
            foreach ($data['contacts'] as $index => $contact) {
                $name = htmlspecialchars($contact['name'] ?? 'N/A');
                $number = htmlspecialchars($contact['number'] ?? 'N/A');
                echo "<tr>
                        <td>" . ($index + 1) . "</td>
                        <td>$name</td>
                        <td>$number</td>
                    </tr>";
            }
        } else {
            echo '<tr>
                    <td colspan="3" class="text-center">No contacts found</td>
                </tr>';
        }

        echo '</tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>';
    }
}

// Call the function
printContactsInTable();
