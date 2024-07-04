<?php

$servername = "srv1192.hstgr.io";
//$servername = "localhost";
$username = "u640377465_wapipro";
$password = "Forsan@2023";
$database = "u640377465_wapipro";


/*






*/


function getUserById($id) {
    // Database connection details
    global $servername;
    global $username ;
    global $password;
    global $database ;
 
    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query
    $stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the query
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if there is a result
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();
        return $user;
    } else {
        return null; // Return null if no user is found
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}




    




 


?>