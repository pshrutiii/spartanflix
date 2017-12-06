<html>
<head>
<?php include("../includes/header.html"); ?>
<link href="../css/favFilter.css" rel="stylesheet">
</head>
<body>
    <?php include("../includes/adProviderNav.html"); ?>
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
							<a href="#" data-toggle="modal" data-target="#content-upload-modal">
								<button class="btn coloredBtn" type="button" style="border-radius:5px; padding:10px; margin-top: 2%;" class="content-upload-btn">UPLOAD</button>
							</a>
							
						</div>
					</div>
				</div>
				<div class="well" style="max-width: 90%; margin:2% 6%;">
					<table class="table">
					  <thead>
						<tr>
						  <th>Title</th>
						  <th>Description</th>
						  <th>Approved</th>
						  <th style="width: 36px;"></th>
						</tr>
					  </thead>
					  <tbody id="content-dashboard-tab">
						<!--populated by adProviderData.js-->
					  </tbody>
					</table>
				</div>
			</div>
			<div class="modal fade" id="content-upload-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header" align="center">
							<h4>Upload Content
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</button>
							</h4>
						</div>
                
						<!-- Begin # DIV Form -->
						<div id="content-div-forms">
							<!-- Begin | upload Form -->
							<form id="content-upload-form">
								<div class="modal-body">
									<div id="content-div-upload-msg">
										<!--div id="content-icon-upload-msg" class="glyphicon glyphicon-chevron-right"></div>
										<span id="content-text-upload-msg">upload Content</span-->
									</div>
									<input id="content-upload-title" name="content-upload-title" class="form-control" type="text" placeholder="Title" required style="margin-top:10px;">
									<textarea id="content-upload-description" name="content-upload-description" class="form-control" type="text" placeholder="Description" required style="margin-top:10px;"></textarea>
									<!--input id="content-approved"  name="content-approved" class="form-control" type="text" placeholder="Approved" required-->
								</div>
								<div class="modal-footer">
									<div>
										<button type="submit" class="btn btn-primary btn-lg btn-block" name="content-upload-btn" id="content-upload-btn" value="upload-submit">submit</button>
									</div>
								</div>
							</form>						
						</div>
					</div>
				</div>
			</div>
			<!-- END # content MODAL upload -->
			
		</div>
	</div>        
</div>
    <?php include("../includes/footer.html"); ?>
	
	<script>
	
		$(document).ready(function(){
			var readSessionData = sessionStorage.getItem("adProviderInfo");
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
	<script src="../js/adProviderData.js"></script>
</body>
</html>