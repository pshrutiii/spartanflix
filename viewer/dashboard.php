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
						<div class="row no-gutter popup-gallery">
							<?php 
							if (pg_numrows($result_img) > 0) {
								while ($row = pg_fetch_row($result_img)) {
									echo '<div class="col-md-3 col-sm-3">';
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
												<th>#</th>
												<th>Title</th>
												<th>Director</th>
												<th>Year</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Kilgore</td>
												<td>Trout</td>
												<td>kilgore</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Bob</td>
												<td>Loblaw</td>
												<td>boblahblah</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Holden</td>
												<td>Caulfield</td>
												<td>penceyreject</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<div role="tabpanel" class="tab-pane" id="history">
					
					
					
					
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

</body>
</html>