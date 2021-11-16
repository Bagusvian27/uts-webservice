<?php
require_once('connection.php');

parse_str(file_get_contents('php://input'), $value);

$GamesId = $value['GamesId'];

//games ialah nama tabel 
$sql = "DELETE FROM games WHERE GamesId ='$GamesId'"; //where untuk mendeklarasikan identitas 
$query = mysqli_query($connection, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 200,
        'status' => 'Data has been deleted'
    ));
} else {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 501,
        'status' => 'error!'
    ));
}