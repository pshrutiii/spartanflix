<html>
<head>
<?php include("../includes/header.html"); ?>
<link href="../css/form.css" rel="stylesheet">
<link href="../css/pricingtables.css" rel="stylesheet">
<style>
.fa{
	margin-right:3%;
}
.modal-body select{
	margin: 3% 0;
}
</style>
<body>
    <?php include("../includes/viewerNav2.html"); ?>
	
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
							<!--br/>
							<i class="fa fa-users" aria-hidden="true"></i>dependent@test.com<span id="dependentEmail"></span-->
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-primary" name="change-plan-btn" id="change-plan-btn" value="change-plan" data-toggle="modal" data-target="#change-plan-modal">Change Plan</button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container pcontent" style="margin-left: 30%;">
	<div class="row">
		<!-- Pricing -->
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3>Plan 1<span>
					30 day</span>
					</h3>
					<h4><i>$</i>24<i>.99</i>
					<span>
					Per Month </span>
					</h4>
				</div>
				<div class="pricing-footer">
					<p> Your ads would be shown for 30 days.
					</p>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="pricing hover-effect">
				<div class="pricing-head">
					<h3>Plan 2<span>
					60 day</span>
					</h3>
					<h4><i>$</i>29<i>.99</i>
					<span>
					Per Month </span>
					</h4>
				</div>
				<div class="pricing-footer">
					<p> Your ads would be shown for 60 days
					</p>
				</div>
			</div>
		</div>
		<!--//End Pricing -->
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
				    		<select id='change-plan_id' class='form-control' type='text' required></select>
							<!--select id='change-plan_title' class='form-control' type='text' ></select>
							<select id='change-plan_price' class='form-control' type='text' ></select>
							<select id='change-plan_duration' class='form-control' type='text' ></select-->
							
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block" id="change-plan-update"  name="change-plan-update" value="change-plan-update">Update</button>
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
			var readSessionData = sessionStorage.getItem("viewerInfo");
			var output = JSON.parse(readSessionData);
			document.getElementById("fName").innerHTML = output["firstName"];
			document.getElementById("lName").innerHTML = output["lastNname"];
			document.getElementById("email").innerHTML = output["email"];
			document.getElementById("startDate").innerHTML = output["startDate"];
			document.getElementById("subscriptionPlan").innerHTML = output["subscriptionId"];
			//document.getElementById("dependent-email").innerHTML = output["dependent"];
			
			$('#change-plan_title').attr("disabled", true); 
			$('#change-plan_price').attr("disabled", true); 
			$('#change-plan_duration').attr("disabled", true); 
			
		});
	</script>
	<script src="../js/adProviderSubscription.js"></script>
</body>
</html>