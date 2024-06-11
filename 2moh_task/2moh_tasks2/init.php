<?php


//$userInfo= getUserById(1);
//print_r($userInfo);

/*
if ($userInfo !== null) {
     

echo $userInfo['name'];

} else {
    echo "User not found.";
}

*/


//getAllUsers();


 function getUserById($id) {
    // Database connection details
    $servername = "localhost";
    $username = "u640377465_gstm";
    $password = "Forsan@2023";
    $database = "u640377465_gstm";

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












function getAllUsers() {
    // Database connection details
    $servername = "localhost";
    $username = "u640377465_gstm";
    $password = "Forsan@2023";
    $database = "u640377465_gstm";


    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    $users = array();

    // Check if there are any results
    if ($result->num_rows > 0) {

       
        // Fetch all the data and store it in the $users array
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;

            //echo $row['id']."","<br>".$row['name']."<br>";



          
            echo '<option value="'.$row['id'].'">' . htmlspecialchars($row['name']) . '</option>';






















































            
        }
    }

   


    // Close the connection
    $conn->close();

    return 0;
}


























































































function getAllUsers_to_table() {
    // Database connection details
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "gstm";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare the SQL query
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);

    $users = array();

    // Check if there are any results
    if ($result->num_rows > 0) {





echo '






<table class="table table-bordered">
  <thead>
    <tr>
     
      <th scope="col">الاسم</th>
      <th scope="col">رابط  شيت المهام </th>
    
    </tr>
  </thead>


  <tbody>


   
    
  










';


































       
        // Fetch all the data and store it in the $users array
        while ($row = $result->fetch_assoc()) {
            $users[] = $row;

            //echo $row['id']."","<br>".$row['name']."<br>";



          
            //echo '<option value="'.$row['id'].'">' . htmlspecialchars($row['name']) . '</option>';





echo '


<tr>
 
<td>'.$row['name'].'</td>
<td><a  target="_blank" href="'.$row['sheet_url'].'">فتح</a></td>
 
</tr>



';
















































            
        }


    echo '
    
    </tbody>
</table>
    
    
    
    
    
    
    
    
    ';
    }

   


    // Close the connection
    $conn->close();

    return 0;
}

?>