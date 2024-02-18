<?php
// Include database connection
include("../connect.php");

// Check if model is sent via POST
if(isset($_POST['model'])) {
    $selectedModel = $_POST['model'];

    // Fetch brand and price from database based on selected model
    $query = "SELECT Brand, Price FROM motorcycles WHERE Model = '$selectedModel'";
    $result = mysqli_query($conn, $query);

    // Check if query was successful
    if($result) {
        // Fetch result row
        $row = mysqli_fetch_assoc($result);

        // Prepare response data
        $response = array(
            'brand' => $row['Brand'],
            'price' => $row['Price']
        );

        // Convert response to JSON and output
        echo json_encode($response);
    } else {
        // If query fails, return error message
        echo "Error: " . mysqli_error($conn);
    }
} else {
    // If model is not sent via POST, return error message
    echo "Model not specified.";
}
?>
