$(document).ready(function()
{
	var $viewercontent;
	$('#viewer-login-submit').click(function(event) {

		event.preventDefault();

		var $email = $('#viewer-login_user').val();
		var $password= $('#viewer-login_pass').val();

		var postData = {

		 	email: $email,
		 	password: $password

		 };

		url = "http://52.52.157.178:3000/viewer/login";
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
			.fail(function(status) {
				console.log(status);
			});
	});

});