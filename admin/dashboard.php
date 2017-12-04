<html>
<head>
<?php include("../includes/header.html"); ?>
<link href="../css/favFilter.css" rel="stylesheet">
</head>
<body>
    <?php include("../includes/adminNav.html"); ?>
    <div class="container-fluid padding-10 text-center">
        <h2 class="section-heading">Welcome <span id="username"></span></h2>
        <hr class="primary">
        

<div class="container">
	<div class="row" style="margin-top: 0px;">
		<div class="col-lg-12">
			<div role="tabpanel" class="tab-pane" id="content-dashboard">
				<br/>
				<div class="container">
					<div class="row" style="margin-top: 0px;">    
						<div class="col-xs-8 col-xs-offset-2">
							<div class="input-group">
								<div class="input-group-btn search-panel">
									<button type="button" class="btn coloredBtn dropdown-toggle" data-toggle="dropdown" style="border-radius:4px;">
										<span id="search_concept">Filter by</span> <span class="caret"></span>
									</button>
									<ul class="dropdown-menu" role="menu">
										<li><a href="">Movies</a></li>
										<li><a href="">Documentaries</a></li>
										<li><a href="">Series</a></li>
										<li><a href="">Ads</a></li>
									</ul>
								</div>
								<input type="hidden" name="search_param" value="all" id="search_param">         
								<input type="text" class="form-control" name="x" placeholder="Search term...">
								<span class="input-group-btn">
									<button class="btn coloredBtn" type="button" style="border-radius:0px; padding:10px;"><span class="glyphicon glyphicon-search"></span></button>
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="well" style="max-width: 90%; margin:2% 6%;">
					<table class="table">
					  <thead>
						<tr>
						  <th>Title</th>
						  <th>Description</th>
						  <th>Type</th>
						  <th>Provider</th>
						  <th>Approved</th>
						</tr>
					  </thead>
					  <tbody id="content-dashboard-tab">
						<!--populated by adProviderData.js-->
					  </tbody>
					</table>
				</div>
			</div>
			<div class="modal fade" id="admin-edit-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" align="center">
							<h4>Approve Content/ Ad
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</button>
							</h4>
						</div>
                
						<!-- Begin # DIV Form -->
						<div id="admin-div-forms">
							<!-- Begin | Register Form -->
							<form id="admin-register-form">
								<div class="modal-body">
									<div id="admin-div-register-msg">
										<!--div id="admin-icon-register-msg" class="glyphicon glyphicon-chevron-right"></div>
										<span id="admin-text-register-msg">Update Content</span-->
									</div>
									<input id="admin-content-id" name="admin-content-id" class="form-control" type="hidden" placeholder="id" style="margin-top:10px;">
									<input id="admin-content-title" name="admin-content-title" class="form-control" type="text" placeholder="Title" required style="margin-top:10px;" readonly>
									<textarea id="admin-content-description" name="admin-content-description" class="form-control" type="text" placeholder="Description" required style="margin-top:10px;"readonly></textarea>
									<input id="admin-content-type"  name="admin-content-type" class="form-control" type="text" placeholder="Type" required style="margin-top:10px;" readonly>
									<input id="admin-content-provider"  name="admin-content-provider" class="form-control" type="text" placeholder="Provider" required style="margin-top:10px;" readonly>
									<div class="form-group" style="margin-top:10px;">
									<select class="form-control" id="admin-content-approved" name="admin-content-approved" required>
										<option value="Yes">Yes</option>
										<option value="No">No</option>
									</select>
								</div>
								<div class="modal-footer">
									<div>
										<button type="submit" class="btn btn-primary btn-lg btn-block" name="admin-form-submit" id="admin-form-submit" value="form">Update</button>
									</div>
								</div>
							</form>						
						</div>
					</div>
				</div>
			</div>
			<!-- END # ADMIN MODAL EDIT -->
			
		</div>
	</div>        
</div>
    <?php include("../includes/footer.html"); ?>
	
	<script>
	
		$(document).ready(function(){
			var readSessionData = sessionStorage.getItem("adminInfo");
			var output = JSON.parse(readSessionData);
			document.getElementById("username").innerHTML = output["fname"]+ "!";
		
			$('.search-panel .dropdown-menu').find('a').click(function(e) {
				e.preventDefault();
				var param = $(this).attr("href").replace("#","");
				var concept = $(this).text();
				$('.search-panel span#search_concept').text(concept);
				$('.input-group #search_param').val(param);
			});		
		});
	</script>
	<script src="../js/adminData.js"></script>
</body>
</html>