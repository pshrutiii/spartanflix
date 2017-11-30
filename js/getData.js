function getData(url){	 
	 
	$.getJSON( url, { format: "json"} )
		.done(function( json ) {
			console.log( "JSON Data: " + json.contentList[ 1 ].director );
			for (var content in json.contentList) {
				$("#dashboard-tabs").append("<div class='col-md-3 col-sm-3' ><a href='#page-URL' class='portfolio-box'><img src='#img-URL' class='img-responsive ' alt=''><div class='portfolio-box-caption'><div class='portfolio-box-caption-content'><div class='project-name'>" + json.contentList[content]["title"] + "</div><div class='project-category text-faded'>" + json.contentList[content]["director"] + "</div></div></div></a></div>");
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
	getData(API_url);
});




