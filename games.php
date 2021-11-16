<?php
//koneksi database
require_once('connection.php');

//method GET & GET by id menggunakan kondisi if else
if (empty($_GET)) {
    $sql = "SELECT * FROM games";
    $query = mysqli_query($connection, $sql);
    while ($row = mysqli_fetch_array($query)) {


        //tampung dalam data array 
        $item[] = array(
            'GamesId' => $row["GamesId"],
            'GamesName' => $row["GamesName"],
            'Year' => $row["Year"],
            'DeveloperId' => $row["DeveloperId"],
           

        );
    }
    $response = array(
        'took' => 0.0026,
        'status' => 201,
        'data' => $item,

    );
    //membuat bentuk reponse dalam bentuk format json 
    echo json_encode($response);
} else {
    $sql = "SELECT * FROM games WHERE GamesId=" . $_GET["GamesId"];
    $query = mysqli_query($connection, $sql);
    //mengambil baris hasil sebagai array asosiatif (case -sensitive)
    while ($row = $query->fetch_assoc()) {


        //tampung dalam data array 
        $item[] = array(
           'GamesId' => $row["GamesId"],
            'GamesName' => $row["GamesName"],
            'Year' => $row["Year"],
            'DeveloperId' => $row["DeveloperId"],
            
        );
    }
    $result = array(
        'took' => 0.0026,
        'status' => 200,
        'data' => $item

    );
    echo json_encode($result);
}