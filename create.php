<?php
require_once('connection.php');

$GamesName = $_POST['GamesName'];
$Year = $_POST['Year'];
$DeveloperId = $_POST['DeveloperId'];


$sql = "INSERT INTO games(GamesName,Year,DeveloperId) VALUES ('$GamesName','$Year','$DeveloperId')";
$query = mysqli_query($connection, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 200,
        'status' => 'Created data has been successfully'
    ));
} else {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 501,
        'status' => 'error!'
    ));
}