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
				console.log(postData);
				console.log(status);
			});

}


$("form").submit(function () {
        switch(this.id) {
            case "viewer-register-form":
                var $fname = $('#viewer-register_firstName').val();
				var $lname = $('#viewer-register_lastName').val();
				var $email = $('#viewer-register_email').val();
				var $password= $('#viewer-register_password').val();
				var now = new Date();
				var $strDate = now.getFullYear() + '-' + (now.getMonth()+1) + '-' + now.getDate();
				var $subscriptionId = document.getElementById('viewer_subscription').value;
				var postData = {email: $email,firstName: $fname,lastName: $lname,startDate: $strDate,password: $password, subscriptionId: $subscriptionId};
				url = "http://52.52.157.178:3000/viewer/signup";
				
				ajaxCall(postData, url, 'viewerInfo', "/viewer/dashboard.php");
                return false;
                break;
            case "adProvider-register-form":
                var $fname = $('#adProvider-register_firstName').val();
				var $lname = $('#adProvider-register_lastName').val();
				var $email = $('#adProvider-register_email').val();
				var $password= $('#adProvider-register_password').val();
				var now = new Date();
				var $strDate = now.getFullYear() + '-' + (now.getMonth()+1) + '-' + now.getDate();
				var $subscriptionId = document.getElementById('ad_subscription').value;
				var postData = {email: $email,firstName: $fname,lastName: $lname,startDate: $strDate,password: $password, subscriptionId: $subscriptionId};
				url = "http://52.52.157.178:3000/adProvider/signup";
				
				ajaxCall(postData, url, 'adProviderInfo', "/adProvider/dashboard.php");
                return false;
                break;
			case "contentProvider-register-form":
                var $cname = $('#contentProvider-register_companyName').val();
				var $email = $('#contentProvider-register_email').val();
				var $password= $('#contentProvider-register_password').val();
				var postData = {email: $email,companyName: $cname, password: $password};
				url = "http://52.52.157.178:3000/contentProvider/signup";
				
				ajaxCall(postData, url, 'contentProviderInfo', "/contentProvider/dashboard.php");
                return false;
                break;
            default:
                return false;
        }
        return false;
    });