$(document).ready(function()
{
	var $viewercontent;
	$('#viewer-register-submit').click(function(event) {

		event.preventDefault();

		var $fname = $('#viewer-register_firstName').val();
		var $lname = $('#viewer-register_lastName').val();
		var $email = $('#viewer-register_email').val();
		var $password= $('#viewer-register_password').val();

		var now = new Date();
		var $strDate = now.getFullYear() + '-' + (now.getMonth()+1) + '-' + now.getDate();
		
		var $subscriptionId = document.getElementById('content_subscription').value;
		
		var postData = {
			email: $email,
			firstName: $fname,
			lastName: $lname,
			startDate: $strDate,
		 	password: $password,
   			subscriptionId: $subscriptionId
		 };

		url = "http://52.52.157.178:3000/viewer/signup";
		var jqxhr = $.ajax(
			{
				method: "POST",
				datatype : "json",
				url: url,
				data: postData
			}
			)
			.done(function(data) {
			var userData = {
			 storeUserDataInSession: function(userData) {
				 var userObjectString = JSON.stringify(userData);
				 window.sessionStorage.setItem('userInfo',userObjectString)
			 },
			 getUserDataFromSession: function() {
				 var userData = window.sessionStorage.getItem('userInfo')
				 return JSON.parse(userData);
			 }
			}
			userData.storeUserDataInSession(data);				
			window.location.href="/services/dashboard.php";
				
			})
			.fail(function(error) {
				console.log("error");
				console.log(postData);
			});


	});

});