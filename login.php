<html>
<head>
	<?php include("includes/header.html"); ?>
	<link href="css/form.css" rel="stylesheet">
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
			<div class="col-lg-3 col-md-3 text-center">
                <div class="service-box">
                    <!--a href="services/gallery.php"-->
					<a href="#" data-toggle="modal" data-target="#viewer-login-modal">
	                    <i class="fa fa-4x fa-th text-primary sr-icons"></i>
	                    <h3>Viewer</h3>
                	</a>
                    <p class="text-muted">Join the world of shows in one place more than ever before at a cheap price.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
            	<div class="service-box">
            		<a href="#" data-toggle="modal" data-target="#adProvider-login-modal">
						<i class="fa fa-4x fa-upload text-primary sr-icons"></i>
            			<h3>Ad Providers</h3> 
            		</a>
		        	<p class="text-muted">Would you like to show your ads through us, please create an account and get started.</p>
		        </div>
            </div>
			<div class="col-lg-3 col-md-3 text-center">
            	<div class="service-box">
            		<a href="#" data-toggle="modal" data-target="#contentProvider-login-modal">
						<i class="fa fa-4x fa-cloud-upload text-primary sr-icons"></i>
            			<h3>Content Providers</h3> 
            		</a>
		        	<p class="text-muted">Want to show your content on our site, please create an account and get started. it's that easy!</p>
		        </div>
            </div>
            <div class="col-lg-3 col-md-3 text-center">
                <div class="service-box">
                    <a href="#" data-toggle="modal" data-target="#admin-login-modal">
	                    <i class="fa fa-4x fa-lock text-primary sr-icons"></i>
	                    <h3>Admin</h3>
                	</a>
                    <p class="text-muted">Only accessible for Spanflix internal admin.</p>
                </div>
            </div>
        </div>
    </div>

<!-- BEGIN # VIEWER MODAL LOGIN -->
<div class="modal fade" id="viewer-login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<h4>Viewer
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					</h4>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="viewer-div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="viewer-login-form">
		                <div class="modal-body">
                            <div id="viewer-div-login-msg">
                                <div id="viewer-icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="viewer-text-login-msg">Login to your account.</span>
                            </div>
				    		<input id="viewer-login_user" class="form-control" type="text" placeholder="E-Mail" name="login_user" required>
				    		<input id="viewer-login_pass" class="form-control" type="password" placeholder="Password" name="login_pass" required>
                            <!--div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div-->
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="viewer-login-submit" id="viewer-login-submit" value="login">Login</button>
                            </div>
				    	    <div>
                                <button id="viewer-login_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                                <button id="viewer-login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="viewer-lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="viewer-div-lost-msg">
                                <div id="viewer-icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="viewer-text-lost-msg">Enter Username</span>
                            </div>
		    				<input id="viewer-lost_email" class="form-control" type="text" placeholder="E-Mail" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="viewer-lost_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="viewer-lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="viewer-register-form" style="display:none;">
            		    <div class="modal-body">
		    				<div id="viewer-div-register-msg">
                                <div id="viewer-icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="viewer-text-register-msg">Register for an account.</span>
                            </div>
		    				<input id="viewer-register_firstName" name="viewer-register_firstName" class="form-control" type="text" placeholder="First Name" required>
                            <input id="viewer-register_lastName" name="viewer-register_lastName" class="form-control" type="text" placeholder="Last Name" required>
                            <input id="viewer-register_email"  name="viewer-register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="viewer-register_password"  name="viewer-register_password" class="form-control" type="password" placeholder="Password" required>
							<div class="form-group" style="margin-top:10px;">
									<select class="form-control" id="viewer_subscription" name="viewer_subscription" required>
										<option value=""></option>
										<option value="1">Beginner (limited)</option>
										<option value="2">Beginner (unlimited)</option>
										<option value = "3">Pro (limited)</option>
										<option value= "4">Pro (unlimited)</option>
									</select>
							</div>  
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="viewer-register-submit" id="viewer-register-submit" value="register">Register</button>
                            </div>
                            <div>
                                <button id="viewer-register_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="viewer-register_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
			</div>
		</div>
	</div>
    <!-- END # VIEWER MODAL LOGIN -->
	
	<!-- BEGIN # AD PROVIDER MODAL LOGIN -->
<div class="modal fade" id="adProvider-login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<h4>Ad Provider
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					</h4>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="adProvider-div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="adProvider-login-form" method="post" action="page.php">
		                <div class="modal-body">
                            <div id="adProvider-div-login-msg">
                                <div id="adProvider-icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="adProvider-text-login-msg">Login to your account.</span>
                            </div>
				    		<input id="adProvider-login_user" class="form-control" type="text" placeholder="E-Mail" name="login_user" required>
				    		<input id="adProvider-login_pass" class="form-control" type="password" placeholder="Password" name="login_pass" required>
                            <!--div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div-->
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="adProvider-login-submit" value="login">Login</button>
                            </div>
				    	    <div>
                                <button id="adProvider-login_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                                <button id="adProvider-login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="adProvider-lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="adProvider-div-lost-msg">
                                <div id="adProvider-icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="adProvider-text-lost-msg">Enter Username</span>
                            </div>
		    				<input id="adProvider-lost_email" class="form-control" type="text" placeholder="E-Mail" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="adProvider-lost_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="adProvider-lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="adProvider-register-form" style="display:none;" method="post" action="includes/validate.php">
            		    <div class="modal-body">
		    				<div id="adProvider-div-register-msg">
                                <div id="adProvider-icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="adProvider-text-register-msg">Register for an account.</span>
                            </div>
		    				<input id="adProvider-register_firstName" name="adProvider-register_firstName" class="form-control" type="text" placeholder="First Name" required>
                            <input id="adProvider-register_lastName" name="adProvider-register_lastName" class="form-control" type="text" placeholder="Last Name" required>
                            <input id="adProvider-register_email"  name="adProvider-register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="adProvider-register_password"  name="adProvider-register_password" class="form-control" type="password" placeholder="Password" required>
							<div class="form-group" style="margin-top:10px;">
									<select class="form-control" id="ad_subscription" name="ad_subscription" required>
										<option value=""></option>
										<option>30 days</option>
										<option>60 days</option>
									</select>
							</div>  
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="adProvider-register-submit" value="register">Register</button>
                            </div>
                            <div>
                                <button id="adProvider-register_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="adProvider-register_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
			</div>
		</div>
	</div>
    <!-- END # AD PROVIDER MODAL LOGIN -->
	
	<!-- BEGIN # CONTENT PROVIDER MODAL LOGIN -->
	<div class="modal fade" id="contentProvider-login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<h4>Content Provider
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					</h4>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="contentProvider-div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="contentProvider-login-form" method="post" action="page.php">
		                <div class="modal-body">
                            <div id="contentProvider-div-login-msg">
                                <div id="contentProvider-icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="contentProvider-text-login-msg">Login to your account.</span>
                            </div>
				    		<input id="contentProvider-login_user" class="form-control" type="text" placeholder="E-Mail" name="login_user" required>
				    		<input id="contentProvider-login_pass" class="form-control" type="password" placeholder="Password" name="login_pass" required>
                            <!--div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div-->
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="contentProvider-login-submit" value="login">Login</button>
                            </div>
				    	    <div>
                                <button id="contentProvider-login_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                                <button id="contentProvider-login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="contentProvider-lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="contentProvider-div-lost-msg">
                                <div id="contentProvider-icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="contentProvider-text-lost-msg">Enter Username</span>
                            </div>
		    				<input id="contentProvider-lost_email" class="form-control" type="text" placeholder="E-Mail" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="contentProvider-lost_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="contentProvider-lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="contentProvider-register-form" style="display:none;" method="post" action="includes/validate.php">
            		    <div class="modal-body">
		    				<div id="contentProvider-div-register-msg">
                                <div id="contentProvider-icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="contentProvider-text-register-msg">Register for an account.</span>
                            </div>
		    				<input id="contentProvider-register_firstName" name="contentProvider-register_firstName" class="form-control" type="text" placeholder="First Name" required>
                            <input id="contentProvider-register_lastName" name="contentProvider-register_lastName" class="form-control" type="text" placeholder="Last Name" required>
                            <input id="contentProvider-register_email"  name="contentProvider-register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="contentProvider-register_password"  name="contentProvider-register_password" class="form-control" type="password" placeholder="Password" required>  
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="contentProvider-register-submit" value="register">Register</button>
                            </div>
                            <div>
                                <button id="contentProvider-register_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="contentProvider-register_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
			</div>
		</div>
	</div>
    <!-- END # CONTENT PROVIDER MODAL LOGIN -->
	
	<!-- BEGIN # ADMIN MODAL LOGIN -->
<div class="modal fade" id="admin-login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<h4>Admin
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					</h4>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="admin-div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="admin-login-form" method="post" action="page.php">
		                <div class="modal-body">
                            <div id="admin-div-login-msg">
                                <div id="admin-icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="admin-text-login-msg">Login to your account.</span>
                            </div>
				    		<input id="admin-login_user" class="form-control" type="text" placeholder="E-Mail" name="login_user" required>
				    		<input id="admin-login_pass" class="form-control" type="password" placeholder="Password" name="login_pass" required>
                            <!--div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div-->
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="admin-login-submit" value="login">Login</button>
                            </div>
				    	    <div>
                                <button id="admin-login_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="admin-lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="admin-div-lost-msg">
                                <div id="admin-icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="admin-text-lost-msg">Enter Username</span>
                            </div>
		    				<input id="admin-lost_email" class="form-control" type="text" placeholder="E-Mail" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="admin-lost_login_btn" type="button" class="btn btn-link">Login</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->                   
                </div>
			</div>
		</div>
	</div>
    <!-- END # ADMIN MODAL LOGIN -->
    <?php include("includes/footer.html"); ?>
	<script type="text/javascript" src="js/allFourLogin.js"></script>
	<script type="text/javascript" src="js/allFourRegister.js"></script>
</body>
</html>