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

    if (!empty($_POST['login-submit'])) {
        $user=$_POST['login_user'];
        $pass=$_POST['login_pass'];

        $sql = "SELECT firstname FROM users WHERE email = '". $user ."' AND password = '" . $pass . "' ;";
        $result = pg_query($conn, $sql);

        if (pg_numrows($result) > 0) {
            while ($row = pg_fetch_row($result)) {
                echo "Hi " . $row[0]. ", you've successfully logged in!";
                //header("Location: users.php");
            }
        } else {
            //echo "0 results";
            header("Location: ../services/incorrect-login.php");
        }
        pg_close($conn);
    }

    if (!empty($_POST['register-submit'])) {
        
        $fName=$_POST['register_firstName'];
        $lName=$_POST['register_lastName'];
        $email=$_POST['register_email'];
        $pass=$_POST['register_password'];
        $address=$_POST['register_address'];
        $homePhone=$_POST['register_homePhone'];
        $cellPhone=$_POST['register_cellPhone'];

        $sql = "INSERT INTO users VALUES ('".$fName."','".$lName."','".$email."', '".$pass."', '".$address."','".$homePhone."','".$cellPhone."');";
        $result = pg_query($conn, $sql);

        if (!$result) {
            echo "Couldn't insert that record!.\n";
        } else {
            echo "New record created successfully";
            //header("Location: services.php");
        } 
        pg_close($conn);
    }

    
?>