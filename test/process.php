<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve user data from POST
    $users = isset($_POST['user']) ? $_POST['user'] : array();

    // Save user data to JSON file
    $jsonFile = 'users.json';
    file_put_contents($jsonFile, json_encode($users));

    // Redirect to result page
    header("Location: result.php");
    exit();
}
?>

