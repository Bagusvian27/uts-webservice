<?php
require_once('connection.php');
//php tidak menyediakan fitur PUT jadi pakai parse
parse_str(file_get_contents('php://input'), $value);


$GamesId = $value['GamesId'];
$GamesName = $value['GamesName'];
$Year = $value['Year'];
$DeveloperId = $value['DeveloperId'];



//games ialah nama tabel 
$sql = "UPDATE games SET GamesName='$GamesName', Year='$Year', DeveloperId='$DeveloperId' WHERE GamesId ='$GamesId'"; //where untuk mendeklarasikan identitas 
$query = mysqli_query($connection, $sql);

if ($query) {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 200,
        'status' => 'Updated data has been successfully'
    ));
} else {
    echo json_encode(array(
        'took' => 0.00026,
        'code' => 501,
        'status' => 'error!'
    ));
}