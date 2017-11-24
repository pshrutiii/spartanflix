<?php  

    $server = "ec2-54-163-251-104.compute-1.amazonaws.com";
    $postgres_user="fbajvjuqmooruz";
    $postgres_pass="4yqUTIXm-AV6wWFx92kIXK7Meg";
    $db="d6le6mjfm6t4kk";

    $conn = pg_connect("host=$server port=5432 dbname=$db user=$postgres_user password=$postgres_pass");
    if (!$conn) {
      echo "A connection error occurred.\n";
      exit;
    }

    $query_users = "SELECT * FROM products;";
    $result = pg_query($conn, $query_users);
    $arr = [];
    while ($row = pg_fetch_row($result)) {
        $avg_rating = $row[5]/$row[6];
        $value = array($row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7], $row[8], $avg_rating);
        array_push($arr, $value);        
    }
    echo json_encode($arr);
    //print_r($arr);

    pg_close();

?>