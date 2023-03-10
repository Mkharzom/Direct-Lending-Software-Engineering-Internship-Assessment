<?php
    // Get the data sent from the AJAX call
    $dbname = $_POST['name'];
    $dbdob = $_POST['dob'];
    $dbadd = $_POST['address'];
    $dbpost = $_POST['postcode'];
    $state = $_POST['state'];

    // Connect to the database
    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "dldb";
    $conn = mysqli_connect($host, $username, $password, $db_name);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare the SQL query
    $query = "SELECT id FROM postcode WHERE postcode = '$dbpost'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    if (!$row) {
        $postid =0;
    } 
    else {
        $postid = $row['id'];
    }
    $sql = "INSERT INTO `customer` (`id`, `name`, `dop`, `address`, `postocde_id`) VALUES ('0', '$dbname', '$dbdob', '$dbadd', '$postid')";
    $stmt = mysqli_prepare($conn, $sql);

    // Execute the query
    if (mysqli_stmt_execute($stmt)) {
        // Query succeeded
        if($postid=='0'){
            $response = array(
                'status' => 'success',
                'message' => 'Data inserted successfully , but without State'
                
            );
        }
        else{
            $response = array(
                'status' => 'success',
                'message' => 'Data inserted successfully'
                
            );
        }
    } else {
        // Query failed
        echo "<script>alert('Data not inserted successfully');</script>";
        $response = array(
            'status' => 'error',
            'message' => 'Error inserting data'
        );
    }
    
    // Close the connection
    mysqli_close($conn);

    // Return the response in JSON format
    echo json_encode($response);
    
    echo "<script>alert('Data inserted successfully'); setTimeout(function(){ window.location.href = '../index.html'; }, 1000);</script>";

?>