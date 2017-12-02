function getData(url){	 
	 
	$.getJSON( url, { format: "json"} )
		.done(function( json ) {
			for (var content in json.contentList) {
				$("#dashboard-tabs").append("<div class='col-md-3 col-sm-3' ><a href='#page-URL' class='portfolio-box'><img src='" + json.contentList[content]["imgURL"] + "' class='img-responsive ' alt=''><div class='portfolio-box-caption'><div class='portfolio-box-caption-content'><div class='project-name'>" + json.contentList[content]["title"] + "</div><div class='project-category text-faded'>" + json.contentList[content]["type"] + "</div></div></div></a></div>");
			}
			for (var favorite in json.favoriteList) {
				$("#favorites-tab").append("<tr><td>" + json.favoriteList[favorite]["year"] +"</td><td>" + json.favoriteList[favorite]["title"] +"</td><td>" + json.favoriteList[favorite]["director"] +"</td><td>" + json.favoriteList[favorite]["type"] +"</td><td>" + json.favoriteList[favorite]["rating"] +"</td></tr>");
			}
			for (var history in json.historyList) {
				$("#history-tab").append("<tr><td id='history-title'>" + json.historyList[history]["title"] +"</td><td id='history-director'>" + json.historyList[history]["director"] +"</td><td id='history-year'>" + json.historyList[history]["year"] +"</td><td id='history-type'>" + json.historyList[history]["type"] +"</td><td id='history-rating'>" + json.historyList[history]["rating"] +"</td><td class='history-delete-btn'><i class='fa fa-trash-o' aria-hidden='true' style='color:red;'></i></td></tr>");
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
	API_url = "http://52.52.157.178:3000/viewer/allHistoryAndFavorite?viewerId=" + viewerId;
	test_url = "http://52.52.157.178:3000/viewer/allHistoryAndFavorite?viewerId=1"
	getData(test_url);
	
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



