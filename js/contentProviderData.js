function getData(url){	 
	$.getJSON( url, { format: "json"} )
		.done(function( json ) {
			for (var item in json) {
				isApproved = json[item]['isApproved'];
				if (isApproved == "1"){
					isApproved = "Yes";
				}
				else{
					isApproved = "No";
				}
				$("#content-dashboard-tab").append("<tr><td id='content-title'>" + json[item]['title'] +"</td><td id='content-director'>" + json[item]['director'] +"</td><td id='content-description'>" + json[item]['description'] +"</td><td id='content-name'>" + json[item]['name'] +"</td><td id='content-id' hidden>" + json[item]['id'] +"</td><td id='content-typeId' hidden>" + json[item]['contentTypeId'] +"</td><td id='content-approved'>" + isApproved +"</td><td class='content-delete-btn'><i class='fa fa-trash-o' aria-hidden='true' style='color:red;'></i></td></tr>");
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
			var err = textStatus + ", " + error;
			console.log( "Request Failed: " + err );
		});
}


function removeData(postData, url){
	var jqxhr = $.ajax(
			{
				method: "POST",
				datatype : "json",
				url: url,
				data: postData
			}
			)
			.done(function(data) {
				console.log("DELETED");
			})
			.fail(function(status) {
				console.log(status);
			});

}

function uploadData(postData, url){
	var jqxhr = $.ajax(
			{
				method: "POST",
				datatype : "json",
				url: url,
				data: postData
			}
			)
			.done(function(data) {
				console.log("UPLOADED");
			})
			.fail(function(status) {
				console.log(status);
			});

}



$(document).ready(function(){
	var readSessionData = sessionStorage.getItem("contentProviderInfo");
	var output = JSON.parse(readSessionData);
	var contentProviderId = output["id"];
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	API_url = IP + "/contentProvider/getContent?contentProviderId=" + contentProviderId;//+"&title=null&search=null";
	getData(API_url);
	
});

//Remove items from content list
$(document).on('click', '.content-delete-btn', function(){ 
	var tr = $(this).closest('tr');
	var $contentTypeId= tr.find('#content-typeId').text();
	var postData = {contentId: $contentTypeId};
	
	console.log(postData);
	
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	API_url = IP + "/contentProvider/removeContent";
	removeData(postData, API_url);
	
	// UI effects on delete
	tr.fadeOut(200, function(){
		tr.remove();
	});
});

//Upload items from content list
$(document).on('click', '#content-upload-btn', function(){ 

	var readSessionData = sessionStorage.getItem("contentProviderInfo");
	var output = JSON.parse(readSessionData);
		
	var $uTitle = $('#content-title').val();
	var $uDescription = $('#content-description').val();
	var $uDirector = $('#content-director').val();
	var $uType= $('#content-type').val();
	var $uId= output['id'];
	alert($uTitle, $uDescription);
	var postData = {title: $uTitle,description: $uDescription, director: $uDirector, type: $uType,contentProviderId: $uId};
	
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	API_url = IP + "/contentProvider/uploadContent";
	uploadData(postData, API_url);
});


