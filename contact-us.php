<html>
<head>
<?php include("includes/header.html"); ?>
</head>
<body>
    <?php include("includes/nav.html"); ?>        
    <div class="container padding-10">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>Ready to start your photography gallery with us? That's great! Give us a call or send us an email and we will get back to you in less than 24 hours!</p>
            </div>
            
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x sr-contact"></i>
                <?php
                $file = fopen("includes/contactInfo.txt","r");
				$phone = fgets($file);
				$email = fgets($file);
				fclose($file);
                ?>
                <p><?php echo $phone;?></p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x sr-contact"></i>
                <p><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></p>
            </div>
        </div>
    </div>
    <?php include("includes/footer.html"); ?>
</body>
</html>