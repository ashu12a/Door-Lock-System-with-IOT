<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function makeApiRequest($apiUrl) {
    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $apiResponse = curl_exec($ch);
    curl_close($ch);

    return $apiResponse;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['pin'])) {
    // Check if the form is submitted
    $pin = isset($_POST['pin']) ? $_POST['pin'] : '';

    // Validate the PIN (you should add more robust validation)
    if ($pin == '1234') {
        // PIN is correct, perform any API-related actions here
        $apiUrl = 'https://blr1.blynk.cloud/external/api/update?token=fA3_-dwyOvs4GKnRvBU6DdjgOA2ak_H6&pin=d2&value=1';
        $apiResponse = makeApiRequest($apiUrl);
        
        // For example, you can make the API call and handle the response
        echo "<script>alert('Door Unlocked Successfully');</script>";
        // Redirect to index.php after unlocking the door
        header("Location: index.php");
        exit();
    } else {
        // Incorrect PIN, show alert and redirect to index.php
        echo "<script>alert('Incorrect PIN');</script>";
        header("Location: index.php");
        exit();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['lockpin'])) {
    // Check if the form is submitted
    $pin = isset($_POST['lockpin']) ? $_POST['lockpin'] : '';

    // Validate the PIN (you should add more robust validation)
    if ($pin == '1234') {
        // PIN is correct, perform any API-related actions here
        $apiUrl = 'https://blr1.blynk.cloud/external/api/update?token=fA3_-dwyOvs4GKnRvBU6DdjgOA2ak_H6&pin=d2&value=0';
        $apiResponse = makeApiRequest($apiUrl);

        // For example, you can make the API call and handle the response
        echo "<script>alert('Door Locked Successfully');</script>";
        // Redirect to index.php after locking the door
        header("Location: index.php");
        exit();
    } else {
        // Incorrect PIN, show alert and redirect to index.php
        echo "<script>alert('Incorrect PIN');</script>";
        header("Location: index.php");
        exit();
    }
}
?>
</body>
</html>
