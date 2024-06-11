<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قائمة المهام</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4">قائمة المهام </h1>
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>الزمن</th>
                    <th>اسم المهمة </th>
                    <th>وصف المهمة</th>
                   
                    <th>مسند المهمة</th>
                    <th>مستلم المهمة </th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                $url = 'https://opensheet.elk.sh/1OVDF84OrYyR1cY2Y4ARp8eKJfcD9cCMvZvmaiyopmII/Sheet1';

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

                $response = curl_exec($ch);

                if ($response === false) {
                    echo 'Error: ' . curl_error($ch);
                } else {
                    $jsonData = json_decode($response, true);
                    foreach ($jsonData as $row) {


                        if( $row['emp_name']=="مهند-966548729060")
                        {

                            echo "<tr>";
                            echo "<td>" . $row['date_and_time'] . "</td>";
                            echo "<td>" . $row['name'] . "</td>";
                            echo "<td>" . $row['des'] . "</td>";
                          
                            echo "<td>" . $row['task_sender_name'] . "</td>";
                            echo "<td>" . $row['emp_name'] . "</td>";
                           
                            echo "</tr>";
                            


                        }else{


                        }
                      



                    }
                }

                curl_close($ch);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>