function getData(url){	 
	 
	$.getJSON( url, { format: "json"} )
		.done(function( json ) {
			for (var content in json.contentList) {
				$("#dashboard-tabs").append("<div class='col-md-3 col-sm-3' ><a href='#page-URL' class='portfolio-box'><img src='#img-URL' class='img-responsive ' alt=''><div class='portfolio-box-caption'><div class='portfolio-box-caption-content'><div class='project-name'>" + json.contentList[content]["title"] + "</div><div class='project-category text-faded'>" + json.contentList[content]["type"] + "</div></div></div></a></div>");
			}
			for (var favorite in json.favoriteList) {
				$("#favorites-tab").append("<tr><td>" + json.favoriteList[favorite]["year"] +"</td><td>" + json.favoriteList[favorite]["title"] +"</td><td>" + json.favoriteList[favorite]["director"] +"</td><td>" + json.favoriteList[favorite]["type"] +"</td><td>" + json.favoriteList[favorite]["rating"] +"</td></tr>");
			}
			for (var history in json.historyList) {
				$("#history-tab").append("<tr><td>" + json.historyList[history]["title"] +"</td><td>" + json.historyList[history]["director"] +"</td><td>" + json.historyList[history]["type"] +"</td><td>" + json.historyList[history]["year"] +"</td><td>" + json.historyList[history]["rating"] +"</td><td><a href='#pencil'><i class='icon-pencil'></i></a><a href='#myModal' role='button' data-toggle='modal'><i class='icon-remove'></i></a></td></tr>");
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
			var err = textStatus + ", " + error;
			console.log( "Request Failed: " + err );
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




