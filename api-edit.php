<?php 

    header('Content-type: application/json');

    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'bar_db';

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn -> connect_error) {
    var_dump('error');
    var_dump($conn);
    die();
    }

    $drink_name = $_GET['drink_name'];
    $brand = $_GET['brand'];
    $price = $_GET['price'];
    $expiration_date = $_GET['expiration_date'];
    $id = $_GET['id'];

    $query = "
        UPDATE bancone
        SET drink_name = '" . $drink_name . "',
            brand = '" . $brand . "',
            price = " . $price . ",
            expiration_date = '" . $expiration_date . "'
        WHERE id = " . $id . "
    ";

    $res = $conn -> query($query);

    $conn->close();
    echo json_encode($res);

?>