<html>
<head>
<?php include("../includes/header.html"); ?>
<link href="../css/form.css" rel="stylesheet">
<style>
.fa{
	margin-right:3%;
}
</style>
<body>
    <?php include("../includes/adProviderNav2.html"); ?>
	
	<div class="container padding-10" style="margin-left: 30%;">
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6">
				<div class="well well-sm">
					<div class="row">
						<div class="col-sm-6 col-md-4" style="margin-top: 2%;">
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
							</p>
						</div>
					</div>
				</div>
				<div class="well">
					<div class="row">
						<div class="col-sm-6">
							<i class="fa fa-bell" aria-hidden="true"></i>Subscription Plan: <span id="subscriptionPlan"></span>
							<br/>
							<i class="fa fa-users" aria-hidden="true"></i>Dependent email <span id="dependentEmail"></span>
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-primary" name="change-plan-btn" id="change-plan-btn" value="change-plan" data-toggle="modal" data-target="#change-plan-modal">Change Plan</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- BEGIN # CHANGE PLAN MODAL LOGIN -->
	<div class="modal fade" id="change-plan-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<h4>Change Subscription Plan
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
					</h4>
				</div>
                
                <!-- Begin # DIV Form -->
                <div id="admin-div-forms">
					<form id="change-plan-form">
		                <div class="modal-body" id="subscription-edits-tab">
				    		<!--inline js-->
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" name="change-plan-update" value="change-plan-update">Update</button>
                            </div>
				    	    <div>
                                
                            </div>
				        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
    <!-- END # CHANGE PLAN MODAL LOGIN -->
	
	<?php include("../includes/footer.html"); ?>
	<script>
	
		$(document).ready(function(){
			//filling data into Profile
			var readSessionData = sessionStorage.getItem("adProviderInfo");
			var output = JSON.parse(readSessionData);
			document.getElementById("fName").innerHTML = output["fname"];
			document.getElementById("lName").innerHTML = output["lname"];
			document.getElementById("email").innerHTML = output["email"];
			document.getElementById("startDate").innerHTML = output["startDate"];
			document.getElementById("subscriptionPlan").innerHTML = output["subscriptionId"];
			//document.getElementById("dependent-email").innerHTML = output["dependent"];
			//Edit items from content list
			
		});
		function getSubscriptionData(url){	 
	 
			$.getJSON( url, { format: "json"} )
				.done(function( json ) {
					for (var content in json.subscriptions) {
						$("#subscription-edits-tab").append("<input id='change-plan_id' class='form-control' type='text' placeholder='Plan Id' name='change-plan_id' required><input id='change-plan_price' class='form-control' type='text' placeholder='Cost' name='change-plan_price' required><input id='change-plan_duration' class='form-control' type='text' placeholder='Duration' name='change-plan_duration' required><input id='change-plan_description' class='form-control' type='text' placeholder='Description' name='change-plan_description' required>");
					}
				})
				.fail(function( jqxhr, textStatus, error ) {
					var err = textStatus + ", " + error;
					console.log( "Request Failed: " + err );
				});
		}
		
		$(document).on('click', '#change-plan-btn', function(){ 
			
			
			console.log("I'm here");
			//url = "http://52.52.157.178:3000/viewer/signup"; // get ALL subscriptions
			//getSubscriptionData(postData, url);
			
			
			/* var tr = $(this).closest('tr');
			
			var $hTitle = tr.find('#content-title').text();
			var $hDirector = tr.find('#content-director').text();
			var $hYear = tr.find('#content-year').text();
			var $hType= tr.find('#content-type').text();
			var $hApproved= tr.find('#content-approved').text();
			var postData = {title: $hTitle,director: $hDirector,year: $hYear,type: $hType,approved: $hApproved};
			copyDetails($hTitle, 'admin-content-title');
			copyDetails($hDirector, 'admin-content-director');
			copyDetails($hYear, 'admin-content-year');
			copyDetails($hType, 'admin-content-type');
			copyDetails($hApproved, 'admin-content-approved');
			function copyDetails(text, field) {
			  document.getElementById(field).value = text;
			} */
			
			

		});
	</script>
</body>
</html>