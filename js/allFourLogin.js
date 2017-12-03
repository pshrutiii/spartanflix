function ajaxCall(postData, url, sessionVar, redirectURL){
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
			 window.sessionStorage.setItem(sessionVar,userObjectString)
		 },
		 getUserDataFromSession: function() {
			 var userData = window.sessionStorage.getItem(sessionVar)
			 return JSON.parse(userData);
		 }
		}
		
		userData.storeUserDataInSession(data);				
		window.location.href=redirectURL;
			
		})
		.fail(function(status) {
			console.log(status);
		});
}


$("form").submit(function () {
        switch(this.id) {
            case "viewer-login-form":
                var $email = $('#viewer-login_user').val();
				var $password= $('#viewer-login_pass').val();
                var postData = {email: $email, password: $password };
				url = "http://52.52.157.178:3000/viewer/login";
				ajaxCall(postData, url, 'viewerInfo', "/viewer/dashboard.php");
                return false;
                break;
            case "adProvider-login-form":
                var $email = $('#adProvider-login_user').val();
				var $password= $('#adProvider-login_pass').val();
                var postData = {email: $email, password: $password };
				url = "http://52.52.157.178:3000/adProvider/login";
				ajaxCall(postData, url, 'adProviderInfo', "/adProvider/dashboard.php");
                return false;
                break;
			case "contentProvider-login-form":
                var $email = $('#contentProvider-login_user').val();
				var $password= $('#contentProvider-login_pass').val();
                var postData = {email: $email, password: $password };
				url = "http://52.52.157.178:3000/contentProvider/login";
				ajaxCall(postData, url, 'contentProviderInfo', "/contentProvider/dashboard.php");
                return false;
                break;
			case "admin-login-form":
                var $email = $('#admin-login_user').val();
				var $password= $('#admin-login_pass').val();
                var postData = {email: $email, password: $password };
				url = "http://52.52.157.178:3000/admin/login";
				ajaxCall(postData, url, 'adminInfo', "/admin/dashboard.php");
                return false;
                break;
            default:
                return false;
        }
        return false;
    });