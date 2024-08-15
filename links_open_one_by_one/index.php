<?php

 $url_to_open;
// Create a new SQLite database or open it if it already exists
$db = new SQLite3('counter.db');

// Create a table to store the counter if it doesn't exist
$db->exec("CREATE TABLE IF NOT EXISTS counter (id INTEGER PRIMARY KEY, count INTEGER)");

function openUrl() {
    global $url_to_open;
    // Define your URLs in an array
    $urls = [
        'https://clp.ksa-ads.com/mrads/meswak/hafaralbatin/doctors/nehad/',
        'https://clp.ksa-ads.com/mrads/meswak/hafaralbatin/doctors/eyman/',
        'https://clp.ksa-ads.com/mrads/meswak/hafaralbatin/doctors/lotfi/',
        'https://clp.ksa-ads.com/mrads/meswak/hafaralbatin/doctors/abdulrahman/',
    ];

    // Open the SQLite database
    $db = new SQLite3('counter.db');

    // Get the current counter value
    $result = $db->querySingle("SELECT count FROM counter WHERE id = 1");

    // If the counter doesn't exist, initialize it
    if ($result === null) {
        $currentCount = 0;
        $db->exec("INSERT INTO counter (id, count) VALUES (1, $currentCount)");
    } else {
        $currentCount = $result;
    }

    // Calculate the index for the URL (modulus to loop through the URLs)
    $urlIndex = $currentCount % count($urls);

    // Output or open the URL (for demonstration, I'll just echo the URL)
    echo "Opening: " . $urls[$urlIndex] . PHP_EOL;

    
    // Increment the counter
    $currentCount++;

    // Update the counter in the database
    $db->exec("UPDATE counter SET count = $currentCount WHERE id = 1");

    $url_to_open=$urls[$urlIndex];
    //sleep(5);
    //header("Location: $urls[$urlIndex]");
     $db->close();
    return 0 ;
}

// Call the function
openUrl();
echo "<br>".$url_to_open;
// header("Location: $url_to_open")


echo '<script type="text/javascript">

//var msg=" تمت عملية التسجيل بنجاح وسيتم التواصل معك في اسرع وقت  ";   



        
//alert(msg);

//window.history.go(-1);


window.location.replace("'.$url_to_open.'");

</script>';


