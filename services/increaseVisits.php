<?php
extract($_POST);
extract($_GET);
echo $prodid;
echo $visits;
$server = "ec2-54-163-251-104.compute-1.amazonaws.com";
$postgres_user="fbajvjuqmooruz";
$postgres_pass="4yqUTIXm-AV6wWFx92kIXK7Meg";
$db="d6le6mjfm6t4kk";

$conn = pg_connect("host=$server port=5432 dbname=$db user=$postgres_user password=$postgres_pass");
if (!$conn) {
  echo "A connection error occurred.\n";
  exit;
}

$query="update products set visit=".$visits." where id=".$prodid;
echo $query;
$answer=pg_query($conn,$query);
pg_close();

?>