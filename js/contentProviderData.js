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
				$("#content-dashboard-tab").append("<tr><td id='content-title'>" + json[item]['title'] +"</td><td id='content-director'>" + json[item]['director'] +"</td><td id='content-description'>" + json[item]['description'] +"</td><td id='content-name'>" + json[item]['name'] +"</td><td id='content-id' hidden>" + json[item]['contentId'] +"</td><td id='content-typeId' hidden>" + json[item]['contentTypeId'] +"</td><td id='content-approved'>" + isApproved +"</td><td class='content-delete-btn'><i class='fa fa-trash-o' aria-hidden='true' style='color:red;'></i></td></tr>");
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
		alert(data);
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
	
	API_url = IP + "/contentProvider/getContent?contentProviderId=" + contentProviderId;
	getData(API_url);
	
});

//Remove items from content list
$(document).on('click', '.content-delete-btn', function(){ 
	var tr = $(this).closest('tr');
	var $contentId= tr.find('#content-id').text();
	var postData = {contentId: $contentId};
	
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
		
	var $uTitle = $('#content-upload-title').val();
	var $uDescription = $('#content-upload-description').val();
	var $uDirector = $('#content-upload-director').val();
	var $uType= $('#content-upload-type option:selected').text();
	var $uId= output['id'];
	var $uActor1_fname = $('#content-actor1_fname').val();
	var $uActor1_lname = $('#content-actor1_lname').val();
	var $uActor2_fname = $('#content-actor2_fname').val();
	var $uActor2_lname = $('#content-actor2_lname').val();
	
	
	var postData = {title: $uTitle,description: $uDescription, director: $uDirector, contentTypeName: $uType,contentProviderId: $uId, actorOneFirstname: $uActor1_fname, actorOneLastname: $uActor1_lname, actorTwoFirstname: $uActor2_fname, actorTwoLastname: $uActor2_lname};
	
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	API_url = IP + "/contentProvider/addContent";
	uploadData(postData, API_url);
});


