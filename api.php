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

    $query = "
        SELECT *
        FROM bancone
        ";

    $res = $conn -> query($query);

    $bancone = [];

    if ($res && $res -> num_rows > 0) {
        while($row = $res -> fetch_assoc()) {
        $bancone[] = $row;
        }
    }

    $conn->close();
    echo json_encode($bancone);

?>