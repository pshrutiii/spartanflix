<html>
<head>
<?php include("../includes/header.html"); 

    $server = "ec2-54-163-251-104.compute-1.amazonaws.com";
    $postgres_user="fbajvjuqmooruz";
    $postgres_pass="4yqUTIXm-AV6wWFx92kIXK7Meg";
    $db="d6le6mjfm6t4kk";

    $conn = pg_connect("host=$server port=5432 dbname=$db user=$postgres_user password=$postgres_pass");
    if (!$conn) {
      echo "A connection error occurred.\n";
      exit;
    }

    if(isset($_GET['search-submit'])){
        $value=$_GET['search_value'];

        $sql = "SELECT * FROM users WHERE firstname LIKE '%".$value."%' 
                OR lastname LIKE '%".$value."%' OR email LIKE '%".$value."%'
                OR homephone LIKE '%".$value."%' OR cellphone LIKE '%".$value."%';";
        $result = pg_query($conn, $sql);
    }

    $sql_img = "SELECT * FROM products;";
    $result_img = pg_query($conn, $sql_img);

?>
</head>
<body>
    <?php include("../includes/nav.html"); ?>
    <div class="container-fluid padding-10 text-center">
        <h2 class="section-heading">Favorites</h2>
        <hr class="primary">    
	</div>

        <?php 
        if(isset($_GET['search-submit'])){
            if (pg_numrows($result) > 0) {
                echo '<table class="table-striped table-hover">'; 
                echo "<tr><th>First Name</th><th>Last Name</th><th>E-Mail</th><th>Home Phone</th><th>Cell Phone</th></tr>"; 
                while ($row = pg_fetch_row($result)) {
                    echo "<tr><td>"; 
                    echo $row[0];
                    echo "</td><td>";   
                    echo $row[1];
                    echo "</td><td>";
                    echo $row[2];
                    echo "</td><td>";
                    echo $row[5];
                    echo "</td><td>";
                    echo $row[6];
                    echo "</td><td>";
                }
                echo "</table>";
            } else {
                echo "0 results for that SEARCH";
                //header("Location: incorrect-login.php");
            }
        }
        pg_close($conn);
        ?>

        <div class="row no-gutter popup-gallery">
            <?php 
            if (pg_numrows($result_img) > 0) {
                while ($row = pg_fetch_row($result_img)) {
                    echo '<div class="col-lg-4 col-sm-6">';
                    $imageName = "IMG_". $row[0];
                    $image_url = $row[2];
                    echo '<a href="'.$image_url.'" class="portfolio-box">';
                    echo '<img src="'.$row[3].'" class="img-responsive " alt="">';
                    echo '<div class="portfolio-box-caption">';
                    echo '<div class="portfolio-box-caption-content">';
                    echo '<div class="project-category text-faded">'.$imageName.'</div>';
                    echo '<div class="project-name">'.$row[1].'</div>';
                    echo '</div></div></a></div>';
                }
            }
            ?>
            
        </div>
    </div>
    <?php include("../includes/footer.html"); ?>
</body>
</html>