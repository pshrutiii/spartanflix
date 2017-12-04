function getData(dashboardURL, favoriteURL, historyURL){	 
	 
	$.getJSON( dashboardURL, { format: "json"} )
		.done(function(json) {
			for (var item in json) {
				$("#dashboard-tabs").append("<div class='col-md-3 col-sm-3' ><a href='#page-URL' class='portfolio-box'><img src='#imageURL' class='img-responsive ' alt=''><div class='portfolio-box-caption'><div class='portfolio-box-caption-content'><div class='project-name'>" + json[item]["title"] + "</div><div class='project-category text-faded'>" + json[item]["director"] + "</div><div class='project-type text-faded' hidden>" + json[item]["type"] + "</div><div class='project-actors text-faded'>" + json[item]["actors"] + "</div></div></div></a></div>");
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
			var err = textStatus + ", " + error;
			console.log( "Request Failed: " + err );
		});
		
		
	$.getJSON( favoriteURL, { format: "json"} )
		.done(function(json) {
			for (var item in json) {
				$("#favorites-tab").append("<tr><td>" + json[item]["title"] +"</td><td>" + json[item]["director"] +"</td><td>" + json[item]["description"] +"</td></tr>");
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
			var err = textStatus + ", " + error;
			console.log( "Request Failed: " + err );
		});
		
	$.getJSON( historyURL, { format: "json"} )
		.done(function(json) {
			for (var item in json) {
				$("#history-tab").append("<tr><td id='history-title'>" + json[item]["title"] +"</td><td id='history-director'>" + json[item]["director"] +"</td><td id='history-year'>" + json[item]["year"] +"</td><td id='history-type'>" + json[item]["type"] +"</td><td id='history-rating'>" + json[item]["rating"] +"</td><td class='history-delete-btn'><i class='fa fa-trash-o' aria-hidden='true' style='color:red;'></i></td></tr>");
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
		method: "UPDATE",
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


$(document).ready(function(){
	var readSessionData = sessionStorage.getItem("viewerInfo");
	var output = JSON.parse(readSessionData);
	viewerId = output["id"];
	
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	/*var director = $(".project-category").val();
	var filterType = $("#search_concept").val();
	var searchParam = $("#search_param").val();
	console.log(director);
	console.log(filterType);*/
	dashboard_url = IP + "/viewer/getViewerContent?viewerId="+viewerId+"&contentType=null&director=null&search=null";
	favorite_url = IP + "/viewer/getFavorites?viewerId="+viewerId;
	history_url = IP + "/viewer/getHistory?viewerId="+viewerId;
	
	getData(dashboard_url, favorite_url, history_url);
	//getHistoryData(API_url);
	
});

//Remove items from history list
	
	$(document).on('click', '.history-delete-btn', function(){ 
		var tr = $(this).closest('tr');
		
		var $hTitle = tr.find('#history-title').text();
		var $hDirector = tr.find('#history-director').text();
		var $hYear = tr.find('#history-year').text();
		var $hType= tr.find('#history-type').text();
		var $hRating= tr.find('#history-rating').text();
		var postData = {title: $hTitle,director: $hDirector,year: $hYear,type: $hType,rating: $hRating};
		
		//console.log(postData);
		
		//url = "http://52.52.157.178:3000/viewer/signup";
		//removeData(postData, url);
		
		// UI effects on delete
		tr.fadeOut(200, function(){
			tr.remove();
		});
	});



