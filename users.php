<html>
<head>
    <?php include("includes/header.html"); 
        $file = fopen("includes/users.txt","r");
        $user1 = fgets($file);
        $user2 = fgets($file);
        $user3 = fgets($file);
        $user4 = fgets($file);
        fclose($file);
    ?>

</head>
<body>
	<?php include("includes/nav.html"); ?>
    <div class="container padding-10">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Welcome Admin!</h2>
                <hr class="primary">
                <p class="text-muted">Current users of our site</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--i class="fa fa-4x fa-diamond text-primary sr-icons"></i-->
                    <h3><?php echo $user1;?></h3>
                    <!--p class="text-muted">Variety of templates to choose from to present your best foot forward.</p-->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i-->
                    <h3><?php echo $user2;?></h3>
                    <!--p class="text-muted">With less than 3 steps you could update your gallery.</p-->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i-->
                    <h3><?php echo $user3;?></h3>
                    <!--p class="text-muted">Our diligent team would ensure all your requests are met in less than 24 hours.</p-->
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <!--i class="fa fa-4x fa-heart text-primary sr-icons"></i-->
                    <h3><?php echo $user4;?></h3>
                    <!--p class="text-muted">We are a bunch of creative artists that love and want to help out our community.</p-->
                </div>
            </div>
        </div>
    </div>
    <?php include("includes/footer.html"); ?>
</body>
</html>