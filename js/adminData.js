function getData(url){	 
	 
	$.getJSON( url, { format: "json"} )
		.done(function( json ) {
			for (var content in json.contentList) {
				$("#admin-dashboard-tab").append("<tr><td id='content-title'>" + json.contentList[content]["title"] +"</td><td id='content-director'>" + json.contentList[content]["director"] +"</td><td id='content-year'>" + json.contentList[content]["year"] +"</td><td id='content-type'>" + json.contentList[content]["type"] +"</td><td id='content-approved'>" + json.contentList[content]["isApproved"] +"</td><td class='content-edit-btn'><a href='' data-toggle='modal' data-target='#admin-edit-modal'><i class='fa fa-pencil' aria-hidden='true' style='color:green;'></i></a></td><td class='content-delete-btn'><i class='fa fa-trash-o' aria-hidden='true' style='color:red;'></i></td></tr>");
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
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	var readSessionData = sessionStorage.getItem("adminInfo");
	var output = JSON.parse(readSessionData);
	adminId = output["id"];
	
	API_url = IP +"/admin/contents?adminId=" + adminId;
	getData(API_url);
});

//Remove items from content list
$(document).on('click', '.content-delete-btn', function(){ 
	var tr = $(this).closest('tr');
	
	var $hTitle = tr.find('#content-title').text();
	var $hDirector = tr.find('#content-director').text();
	var $hYear = tr.find('#content-year').text();
	var $hType= tr.find('#content-type').text();
	var $hApproved= tr.find('#content-approved').text();
	var postData = {title: $hTitle,director: $hDirector,year: $hYear,type: $hType,approved: $hApproved};
	
	//console.log(postData);
	
	//url = "http://52.52.157.178:3000/viewer/signup";
	//removeData(postData, url);
	
	// UI effects on delete
	tr.fadeOut(200, function(){
		tr.remove();
	});
});

//Edit items from content list
$(document).on('click', '.content-edit-btn', function(){ 
	var tr = $(this).closest('tr');
	
	var $hTitle = tr.find('#content-title').text();
	var $hDirector = tr.find('#content-director').text();
	var $hYear = tr.find('#content-year').text();
	var $hType= tr.find('#content-type').text();
	var $hApproved= tr.find('#content-approved').text();
	var postData = {title: $hTitle,director: $hDirector,year: $hYear,type: $hType,approved: $hApproved};
	
	console.log(postData);
	
	copyDetails($hTitle, 'admin-content-title');
	copyDetails($hDirector, 'admin-content-director');
	copyDetails($hYear, 'admin-content-year');
	copyDetails($hType, 'admin-content-type');
	copyDetails($hApproved, 'admin-content-approved');
	function copyDetails(text, field) {
	  document.getElementById(field).value = text;
	}
	
	//url = "http://52.52.157.178:3000/viewer/signup";
	//removeData(postData, url);

});




