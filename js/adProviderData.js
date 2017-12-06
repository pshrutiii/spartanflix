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
				$("#content-dashboard-tab").append("<tr><td id='content-title'>" + json[item]['title'] +"</td><td id='content-description'>" + json[item]['description'] +"</td><td id='content-id' hidden>" + json[item]['advertisementId'] +"</td><td id='content-approved'>" + isApproved +"</td><td class='content-delete-btn'><i class='fa fa-trash-o' aria-hidden='true' style='color:red;'></i></td></tr>");
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
	var readSessionData = sessionStorage.getItem("adProviderInfo");
	var output = JSON.parse(readSessionData);
	var adProviderId = output["id"];
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	API_url = IP + "/adProvider/getAllAds?adProviderId=" + adProviderId;
	getData(API_url);
	
});

//Remove items from content list
$(document).on('click', '.content-delete-btn', function(){ 
	var tr = $(this).closest('tr');
	var $adId= tr.find('#content-id').text();
	var postData = {adId: $adId};

	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	API_url = IP + "/adProvider/removeContent";
	removeData(postData, API_url);
	
	// UI effects on delete
	tr.fadeOut(200, function(){
		tr.remove();
	});
});

//Upload items from content list
$(document).on('click', '#content-upload-btn', function(){ 

	var readSessionData = sessionStorage.getItem("adProviderInfo");
	var output = JSON.parse(readSessionData);
		
	var $uTitle = $('#content-upload-title').val();
	var $uDescription = $('#content-upload-description').val();
	var $uId= output['id'];
	var postData = {title: $uTitle,description: $uDescription, adProviderId: $uId};
	
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	API_url = IP + "/adProvider/addAd";
	uploadData(postData, API_url);
});

function getSearchData(url){	 
	$.getJSON( url, { format: "json"} )
		.done(function(json) {
			$("#content-dashboard-tab").empty();
			for (var item in json) {
				isApproved = json[item]['isApproved'];
				if (isApproved == "1"){
					isApproved = "Yes";
				}
				else{
					isApproved = "No";
				}
				$("#content-dashboard-tab").append("<tr><td id='content-title'>" + json[item]['title'] +"</td><td id='content-description'>" + json[item]['description'] +"</td><td id='content-id' hidden>" + json[item]['advertisementId'] +"</td><td id='content-approved'>" + isApproved +"</td><td class='content-delete-btn'><i class='fa fa-trash-o' aria-hidden='true' style='color:red;'></i></td></tr>");
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
			var err = textStatus + ", " + error;
			console.log( "Request Failed: " + err );
		});
}

//Search
$(document).on('click', "#adProvider-search-btn", function(){
	var searchVal = $("#searchVal").val();
	
	var readSessionData = sessionStorage.getItem("adProviderInfo");
	var output = JSON.parse(readSessionData);
	adProviderId = output["id"];
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	API_url = IP + "/adProvider/getAllAds?adProviderId=" + adProviderId + "&search="+ searchVal;
	
	getSearchData(API_url);
});




