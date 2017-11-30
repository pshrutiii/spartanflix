<html>
<head>
<?php include("../includes/header.html"); ?>
<link href="../css/favFilter.css" rel="stylesheet">
</head>
<body>
    <?php include("../includes/nav2.html"); ?>
    <div class="container-fluid padding-10 text-center">
        <h2 class="section-heading">Welcome <span id="username"></span></h2>
        <hr class="primary">
        

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<!-- Nav tabs -->
			<div class="card">
				<ul class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#dashboard" aria-controls="dashboard" role="tab" data-toggle="tab">Dashboard</a></li>
					<li role="presentation"><a href="#favorites" aria-controls="favorites" role="tab" data-toggle="tab">Favorites</a></li>
					<li role="presentation"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">History</a></li>
				</ul>

				<!-- Tab panes -->
				<div class="tab-content">
					<div role="tabpanel" class="tab-pane active" id="dashboard">
						<br/>
						<div class="container">
							<div class="row">    
								<div class="col-xs-8 col-xs-offset-2">
									<div class="input-group">
										<div class="input-group-btn search-panel">
											<button type="button" class="btn coloredBtn dropdown-toggle" data-toggle="dropdown" style="border-radius:4px;">
												<span id="search_concept">Filter by</span> <span class="caret"></span>
											</button>
											<ul class="dropdown-menu" role="menu">
											  <li><a href="#contains">Movies</a></li>
											  <li><a href="#its_equal">Documentaries</a></li>
											  <li><a href="#greather_than">Series</a></li>
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
						<br/>
						<div class="row no-gutter popup-gallery" id="dashboard-tabs">
							<!--Being populated by getData.js-->
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="favorites">
						<div class="row">
							<div class="container-fluid text-center">
								<div class="panel panel-primary">
									<div class="panel-heading">
										<h3 class="panel-title">Filter watch list</h3>
										<div class="pull-right">
											<span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
												<i class="glyphicon glyphicon-filter"></i>
											</span>
										</div>
									</div>
									<div class="panel-body">
										<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter watch list by title, director, year" />
									</div>
									<table class="table table-hover" id="dev-table">
										<thead>
											<tr>
												<th>Year</th>
												<th>Title</th>
												<th>Director</th>
												<th>Type</th>
												<th>Rating</th>
											</tr>
										</thead>
										<tbody id="favorites-tab">
											<!--populated by getData.js-->
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="history">
					
					<p id="result"> </p>
					
					
					</div>
				</div>
			</div>
		</div>
	</div>        
    </div>
    <?php include("../includes/footer.html"); ?>
	
	<script>
	
		$(document).ready(function(){
			var readSessionData = sessionStorage.getItem("viewerInfo");
			var output = JSON.parse(readSessionData);
			document.getElementById("username").innerHTML = output["firstName"]+ "!";
			
			
			$('.search-panel .dropdown-menu').find('a').click(function(e) {
				e.preventDefault();
				var param = $(this).attr("href").replace("#","");
				var concept = $(this).text();
				$('.search-panel span#search_concept').text(concept);
				$('.input-group #search_param').val(param);
			});		
		});
	</script>
	<script src="../js/getData.js"></script>

</body>
</html>