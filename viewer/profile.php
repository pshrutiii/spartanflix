<html>
<head>
<?php include("../includes/header.html"); ?>
<style>
.fa{
	margin-right:3%;
}
</style>
<body>
    <?php include("../includes/nav3.html"); ?>
	
	<div class="container padding-10" style="margin-left: 30%;">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="well well-sm" style="background:white;">
					<div class="row">
						<div class="col-sm-6 col-md-4">
							<img src="//i.imgur.com/9td5htZ.png" alt="" class="img-rounded img-responsive" />
						</div>
						<div class="col-sm-6 col-md-8">
							<h2>
								<span id="fName"></span>
								<span id="lName"></span>
							</h2>
							
							<p>
								<i class="fa fa-envelope" aria-hidden="true"></i><span id="email"></span>
								<br />
								<i class="fa fa-calendar" aria-hidden="true"></i>Joined since: <span id="startDate"></span>
								<br />
								<i class="fa fa-bell" aria-hidden="true"></i>Subscription Plan: <span id="subscriptionPlan"></span>
							</p>
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
			document.getElementById("fName").innerHTML = output["firstName"];
			document.getElementById("lName").innerHTML = output["lastName"];
			document.getElementById("email").innerHTML = output["email"];
			document.getElementById("startDate").innerHTML = output["startDate"];
			document.getElementById("subscriptionPlan").innerHTML = output["subscriptionId"];
		});
	</script>
</body>
</html>