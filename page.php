<html>
<head>
	<?php include("includes/header.html"); 

    $server = "ec2-54-163-251-104.compute-1.amazonaws.com";
    $postgres_user="fbajvjuqmooruz";
    $postgres_pass="4yqUTIXm-AV6wWFx92kIXK7Meg";
    $db="d6le6mjfm6t4kk";

    $conn = pg_connect("host=$server port=5432 dbname=$db user=$postgres_user password=$postgres_pass");
    if (!$conn) {
      echo "A connection error occurred.\n";
      exit;
    }

    if (!empty($_POST['admin-login-submit'])) {
        $user=$_POST['login_user'];
        $pass=$_POST['login_pass'];

        $sql = "SELECT * FROM users WHERE email = '". $user ."' AND password = '" . $pass . "' ;";
        $result = pg_query($conn, $sql);

        if (pg_numrows($result) > 0) {
            while ($row = pg_fetch_row($result)) {
                $u_fname = $row[0];
                $u_lname = $row[1];
                $u_email = $row[2];
                $u_addr = $row[4];
                $u_hphone = $row[5];
                $u_cphone = $row[6];
                //header("Location: users.php");
            }
        } else {
            //echo "0 results";
            header("Location: ../services/incorrect-login.php");
        }
		
		
	if (!empty($_POST['viewer-login-submit'])) {
        $user=$_POST['login_user'];
        $pass=$_POST['login_pass'];

        $sql = "SELECT * FROM users WHERE email = '". $user ."' AND password = '" . $pass . "' ;";
        $result = pg_query($conn, $sql);

        if (pg_numrows($result) > 0) {
            while ($row = pg_fetch_row($result)) {
                $u_fname = $row[0];
                $u_lname = $row[1];
                $u_email = $row[2];
                $u_addr = $row[4];
                $u_hphone = $row[5];
                $u_cphone = $row[6];
                //header("Location: users.php");
            }
        } else {
            //echo "0 results";
            header("Location: ../services/incorrect-login.php");
        }
		
	if (!empty($_POST['provider-login-submit'])) {
        $user=$_POST['login_user'];
        $pass=$_POST['login_pass'];

        $sql = "SELECT * FROM users WHERE email = '". $user ."' AND password = '" . $pass . "' ;";
        $result = pg_query($conn, $sql);

        if (pg_numrows($result) > 0) {
            while ($row = pg_fetch_row($result)) {
                $u_fname = $row[0];
                $u_lname = $row[1];
                $u_email = $row[2];
                $u_addr = $row[4];
                $u_hphone = $row[5];
                $u_cphone = $row[6];
                //header("Location: users.php");
            }
        } else {
            //echo "0 results";
            header("Location: ../services/incorrect-login.php");
        }
        
    }

	?>
</head>
<body>
	<?php include("includes/nav.html"); ?>
	<div class="container padding-10">
	    <div class="row profile">
			<div class="col-md-3">
				<div class="profile-sidebar">
					<!-- SIDEBAR USER TITLE -->
					<div class=" profile-usertitle profile-name">
						<div class="profile-name">
							<?php echo $u_fname . " " . $u_lname; ?>
						</div>
						<div class="profile-desc">
							<?php echo $u_email; ?>
						</div>
						<div class="profile-desc">
							<?php echo $u_addr; ?>
						</div>
						<div class="profile-desc">
							<?php echo $u_hphone ." ; ". $u_cphone; ?>
						</div>
					</div>
					<!-- END SIDEBAR USER TITLE -->
					<!-- SIDEBAR BUTTONS -->
				<div class="profile-userbuttons">
					<button type="button" class="btn btn-success btn-sm">Message</button>
				</div>
				<!-- END SIDEBAR BUTTONS -->
				</div>
			</div>
			<div class="col-md-9">
	            <div class="profile-content">
				    <div class="row no-gutter popup-gallery">
			            <div class="col-lg-4 col-sm-6">
			                <a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
			                    <img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
			                    <div class="portfolio-box-caption">
			                        <div class="portfolio-box-caption-content">
			                            <div class="project-category text-faded">
			                                Category
			                            </div>
			                            <div class="project-name">
			                                Project Name
			                            </div>
			                        </div>
			                    </div>
			                </a>
			            </div>
			            <div class="col-lg-4 col-sm-6">
			                <a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
			                    <img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
			                    <div class="portfolio-box-caption">
			                        <div class="portfolio-box-caption-content">
			                            <div class="project-category text-faded">
			                                Category
			                            </div>
			                            <div class="project-name">
			                                Project Name
			                            </div>
			                        </div>
			                    </div>
			                </a>
			            </div>
			            <div class="col-lg-4 col-sm-6">
			                <a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
			                    <img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
			                    <div class="portfolio-box-caption">
			                        <div class="portfolio-box-caption-content">
			                            <div class="project-category text-faded">
			                                Category
			                            </div>
			                            <div class="project-name">
			                                Project Name
			                            </div>
			                        </div>
			                    </div>
			                </a>
			            </div>
			            <div class="col-lg-4 col-sm-6">
			                <a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
			                    <img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
			                    <div class="portfolio-box-caption">
			                        <div class="portfolio-box-caption-content">
			                            <div class="project-category text-faded">
			                                Category
			                            </div>
			                            <div class="project-name">
			                                Project Name
			                            </div>
			                        </div>
			                    </div>
			                </a>
			            </div>
			            <div class="col-lg-4 col-sm-6">
			                <a href="img/portfolio/fullsize/5.jpg" class="portfolio-box">
			                    <img src="img/portfolio/thumbnails/5.jpg" class="img-responsive" alt="">
			                    <div class="portfolio-box-caption">
			                        <div class="portfolio-box-caption-content">
			                            <div class="project-category text-faded">
			                                Category
			                            </div>
			                            <div class="project-name">
			                                Project Name
			                            </div>
			                        </div>
			                    </div>
			                </a>
			            </div>
			            <div class="col-lg-4 col-sm-6">
			                <a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
			                    <img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
			                    <div class="portfolio-box-caption">
			                        <div class="portfolio-box-caption-content">
			                            <div class="project-category text-faded">
			                                Category
			                            </div>
			                            <div class="project-name">
			                                Project Name
			                            </div>
			                        </div>
			                    </div>
			                </a>
			            </div>
			        </div>
	            </div>
			</div>
		</div>
	</div>
    <?php include("includes/footer.html"); 
    pg_close($conn);
    ?>
</body>
</html>