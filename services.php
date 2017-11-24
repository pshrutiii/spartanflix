<html>
<head>
	<?php include("includes/header.html"); ?>
</head>
<body>
	<?php include("includes/nav.html"); ?>
    <div class="container padding-10">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">How do you identify yourself?</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 text-center">
            	<div class="service-box">
            		<a href="#" data-toggle="modal" data-target="#login-modal">
            			<i class="fa fa-4x fa-cloud-upload text-primary sr-icons"></i>
            			<h3>Photographer</h3> 
            		</a>
		        	<p class="text-muted">Build a profile with us and we'll help you set up a very professional looking page that's customized to your demands.</p>
		        </div>
            </div>
            <div class="col-lg-6 col-md-6 text-center">
                <div class="service-box">
                    <a href="services/gallery.php">
	                    <i class="fa fa-4x fa-th text-primary sr-icons"></i>
	                    <h3>Customer</h3>
                	</a>
                    <p class="text-muted">Presenting a community of artists and easy to browse gallery. We make buying and selling images easier.</p>
                </div>
            </div>
        </div>
    </div>

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<h4>Personalized Gallery
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					</h4>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="login-form" method="post" action="page.php">
		                <div class="modal-body">
                            <div id="div-login-msg">
                                <div id="icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-login-msg">Login to your account.</span>
                            </div>
				    		<input id="login_user" class="form-control" type="text" placeholder="E-Mail" name="login_user" required>
				    		<input id="login_pass" class="form-control" type="password" placeholder="Password" name="login_pass" required>
                            <!--div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div-->
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="login-submit" value="login">Login</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="div-lost-msg">
                                <div id="icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-lost-msg">Enter Username</span>
                            </div>
		    				<input id="lost_email" class="form-control" type="text" placeholder="E-Mail" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="lost_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="register-form" style="display:none;" method="post" action="includes/validate.php">
            		    <div class="modal-body">
		    				<div id="div-register-msg">
                                <div id="icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="text-register-msg">Register for an account.</span>
                            </div>
		    				<input id="register_firstName" name="register_firstName" class="form-control" type="text" placeholder="First Name" required>
                            <input id="register_lastName" name="register_lastName" class="form-control" type="text" placeholder="Last Name" required>
                            <input id="register_email"  name="register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="register_password"  name="register_password" class="form-control" type="password" placeholder="Password" required>
                            <input id="register_address" name="register_address" class="form-control" type="text" placeholder="Address" required>
                            <input id="register_homePhone" name="register_homePhone" class="form-control" type="text" placeholder="Home Phone" required>
                            <input id="register_cellPhone" name="register_cellPhone" class="form-control" type="text" placeholder="Cell Phone" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="register-submit" value="register">Register</button>
                            </div>
                            <div>
                                <button id="register_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="register_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form http://bootsnipp.com/snippets/featured/modal-login-with-jquery-effects-->

                


			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
    <?php include("includes/footer.html"); ?>
</body>
</html>