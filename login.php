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
			<div class="col-lg-4 col-md-4 text-center">
                <div class="service-box">
                    <!--a href="services/gallery.php"-->
					<a href="#" data-toggle="modal" data-target="#viewer-login-modal">
	                    <i class="fa fa-4x fa-th text-primary sr-icons"></i>
	                    <h3>Viewer</h3>
                	</a>
                    <p class="text-muted">Join the world of shows in one place more than ever before at a cheap price.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
            	<div class="service-box">
            		<a href="#" data-toggle="modal" data-target="#provider-login-modal">
						<i class="fa fa-4x fa-upload text-primary sr-icons"></i>
            			<h3>Ad/Content Providers</h3> 
            		</a>
		        	<p class="text-muted">Would you like to show your ads or content through us, please create an account and get started.</p>
		        </div>
            </div>
            <div class="col-lg-4 col-md-4 text-center">
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
                    <form id="viewer-login-form" method="post" action="page.php">
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
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="viewer-login-submit" value="login">Login</button>
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
                    <form id="viewer-register-form" style="display:none;" method="post" action="includes/validate.php">
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
									<select class="form-control" id="content_subscription" name="content_subscription" required>
										<option value=""></option>
										<option>Beginner (limited)</option>
										<option>Beginner (unlimited)</option>
										<option>Pro (limited)</option>
										<option>Pro (unlimited)</option>
									</select>
							</div>  
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="viewer-register-submit" value="register">Register</button>
                            </div>
                            <div>
                                <button id="viewer-register_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="viewer-register_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form http://bootsnipp.com/snippets/featured/modal-login-with-jquery-effects-->
			</div>
		</div>
	</div>
    <!-- END # VIEWER MODAL LOGIN -->
	
	<!-- BEGIN # PROVIDER MODAL LOGIN -->
<div class="modal fade" id="provider-login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<h4>Provider
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					</h4>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="provider-div-forms">
                
                    <!-- Begin # Login Form -->
                    <form id="provider-login-form" method="post" action="page.php">
		                <div class="modal-body">
                            <div id="provider-div-login-msg">
                                <div id="provider-icon-login-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="provider-text-login-msg">Login to your account.</span>
                            </div>
				    		<input id="provider-login_user" class="form-control" type="text" placeholder="E-Mail" name="login_user" required>
				    		<input id="provider-login_pass" class="form-control" type="password" placeholder="Password" name="login_pass" required>
                            <!--div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div-->
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="provider-login-submit" value="login">Login</button>
                            </div>
				    	    <div>
                                <button id="provider-login_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                                <button id="provider-login_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
				        </div>
                    </form>
                    <!-- End # Login Form -->
                    
                    <!-- Begin | Lost Password Form -->
                    <form id="provider-lost-form" style="display:none;">
    	    		    <div class="modal-body">
		    				<div id="provider-div-lost-msg">
                                <div id="provider-icon-lost-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="provider-text-lost-msg">Enter Username</span>
                            </div>
		    				<input id="provider-lost_email" class="form-control" type="text" placeholder="E-Mail" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                            </div>
                            <div>
                                <button id="provider-lost_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="provider-lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="provider-register-form" style="display:none;" method="post" action="includes/validate.php">
            		    <div class="modal-body">
		    				<div id="provider-div-register-msg">
                                <div id="provider-icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="provider-text-register-msg">Register for an account.</span>
                            </div>
		    				<input id="provider-register_firstName" name="provider-register_firstName" class="form-control" type="text" placeholder="First Name" required>
                            <input id="provider-register_lastName" name="provider-register_lastName" class="form-control" type="text" placeholder="Last Name" required>
                            <input id="provider-register_email"  name="provider-register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="provider-register_password"  name="provider-register_password" class="form-control" type="password" placeholder="Password" required>
							<div class="form-group" style="margin-top:10px;">
									<select class="form-control" id="content_subscription" name="ad_subscription" required>
										<option value=""></option>
										<option>30 days</option>
										<option>60 days</option>
									</select>
							</div>  
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="provider-register-submit" value="register">Register</button>
                            </div>
                            <div>
                                <button id="provider-register_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="provider-register_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form http://bootsnipp.com/snippets/featured/modal-login-with-jquery-effects-->
			</div>
		</div>
	</div>
    <!-- END # PROVIDER MODAL LOGIN -->
	
	
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
                                <button id="admin-login_register_btn" type="button" class="btn btn-link">Register</button>
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
                                <button id="admin-lost_register_btn" type="button" class="btn btn-link">Register</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Lost Password Form -->
                    
                    <!-- Begin | Register Form -->
                    <form id="admin-register-form" style="display:none;" method="post" action="includes/validate.php">
            		    <div class="modal-body">
		    				<div id="admin-div-register-msg">
                                <div id="admin-icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
                                <span id="admin-text-register-msg">Register for an account.</span>
                            </div>
		    				<input id="admin-register_firstName" name="admin-register_firstName" class="form-control" type="text" placeholder="First Name" required>
                            <input id="admin-register_lastName" name="admin-register_lastName" class="form-control" type="text" placeholder="Last Name" required>
                            <input id="admin-register_email"  name="admin-register_email" class="form-control" type="text" placeholder="E-Mail" required>
                            <input id="admin-register_password"  name="admin-register_password" class="form-control" type="password" placeholder="Password" required>
            			</div>
		    		    <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="admin-register-submit" value="register">Register</button>
                            </div>
                            <div>
                                <button id="admin-register_login_btn" type="button" class="btn btn-link">Login</button>
                                <button id="admin-register_lost_btn" type="button" class="btn btn-link">Forgot Password?</button>
                            </div>
		    		    </div>
                    </form>
                    <!-- End | Register Form -->
                    
                </div>
                <!-- End # DIV Form http://bootsnipp.com/snippets/featured/modal-login-with-jquery-effects-->
			</div>
		</div>
	</div>
    <!-- END # ADMIN MODAL LOGIN -->
    <?php include("includes/footer.html"); ?>
</body>
</html>