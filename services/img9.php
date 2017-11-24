<html>
<head>
<?php include("../includes/header.html"); 
    if(isset($_COOKIE['SM_cookie'])){
        setcookie('SM_cookie', "9", time()+3600);
        setcookie('backup', "9". ','. $_COOKIE['backup'], time()+3600);
    }else{
        setcookie('SM_cookie', '9', time()+3600);
        setcookie('backup', '9', time()+3600);
    }

    $server = "ec2-54-163-251-104.compute-1.amazonaws.com";
    $postgres_user="fbajvjuqmooruz";
    $postgres_pass="4yqUTIXm-AV6wWFx92kIXK7Meg";
    $db="d6le6mjfm6t4kk";

    $conn = pg_connect("host=$server port=5432 dbname=$db user=$postgres_user password=$postgres_pass");
    if (!$conn) {
      echo "A connection error occurred.\n";
      exit;
    }

    $sql_img = "SELECT * FROM products WHERE id = 9;";
    $result_img = pg_query($conn, $sql_img);
    
?>
</head>
<body>
    <?php 
        include("../includes/nav.html"); 
        include("img_general.php");
        include("../includes/footer.html"); 
    ?>
</body>
</html>