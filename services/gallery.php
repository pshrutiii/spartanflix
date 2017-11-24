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
        <h2 class="section-heading">Search our Gallery</h2>
        <hr class="primary">
        <div id="custom-search-input">
            <form action="" method="GET" style="margin-bottom: 0">
                <div class="input-group col-md-12">
                    <input type="text" id="search_value" name="search_value" class="form-control input-lg" placeholder="Search by a photographer's name, email or phone number" />
                    <span class="input-group-btn">
                        <input class="btn btn-primary" type="submit" id="search-submit" name="search-submit"></input>
                    </span>
                </div>
            </form>
        </div>
        <div class="trending-pg">
            <br/>
            <?php if(isset($_COOKIE['backup'])){
                $cookie_result = $_COOKIE['backup'];
                $stat = explode(",", $cookie_result);
                $cookie_counter = array( 1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0, 6 => 0, 7 => 0,
                    8 => 0,9 => 0, 10 => 0);
                
                //calculating count for each page
                foreach($stat as $k => $val){
                    foreach($cookie_counter as $k_counter => $val_counter){
                        if($val == $k_counter){
                            $val_counter += 1;
                            $cookie_counter[$val] = $val_counter;
                        }
                    }
                }
                
                arsort($cookie_counter); // sorting by max number of pages that got hits
                //print_r($cookie_counter);
                
            }?>
            <div class="container">
                <?php 
                    if(isset($_COOKIE['SM_cookie'])){
                        echo '<div class="row" style="background: white;">';
                        echo '<p> Trending Pages</p>';
                        $count = 0;
                        foreach ($cookie_counter as $key => $value) {
                            if($count < 6){         // only need the top 6
                                echo '<div class="col-lg-2 col-md-2 text-center">';
                                echo '<div class="service-box">';
                                echo '<a href="/services/img'.$key.'.php">';
                                echo '<p> (page hits = '. $value.') </p>';
                                echo '<img src="../img/gallery/IMG_'.$key.'.jpg" class="img-responsive " alt="">';    
                                echo '</div>';
                                echo '</div>';
                                $count++;
                            }
                        }   
                        
                            
                    }
                ?>
                </div>
            </div>
        </div>
        <br/>

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