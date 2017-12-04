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
				$("#content-dashboard-tab").append("<tr><td id='content-title'>" + json[item]['title'] +"</td><td id='content-description'>" + json[item]['description'] +"</td><td id='content-type'>" + json[item]['contentType'] +"</td><td id='content-provider'>" + json[item]['providerName'] +"</td><td id='content-id' hidden>" + json[item]['id'] +"</td><td id='content-approved'>" + isApproved +"</td><td class='content-edit-btn'><a href='' data-toggle='modal' data-target='#admin-edit-modal'><i class='fa fa-pencil' aria-hidden='true' style='color:green;'></i></a></td></tr>");
			}
		})
		.fail(function( jqxhr, textStatus, error ) {
			var err = textStatus + ", " + error;
			console.log( "Request Failed: " + err );
		});
}


function approveData(postData, url){
	var jqxhr = $.ajax(
	{
		method: "POST",
		datatype : "json",
		url: url,
		data: postData
	}
	)
	.done(function(data) {
		console.log("Approval");
	})
	.fail(function(status) {
		console.log(status);
	});

}


$(document).ready(function(){
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	
	API_url = IP +"/admin/getAllContentAndAds";
	getData(API_url);
});

function setDropdown(selId, value){
		var sel = document.getElementById(selId);
		var opt = document.createElement('option');
		opt.innerHTML = value;
		opt.value = value;
	}

// Display in popup
$(document).on('click', '.content-edit-btn', function(){ 
	var tr = $(this).closest('tr');
	var $hId = tr.find('#content-id').text();
	var $hTitle = tr.find('#content-title').text();
	var $hDescription = tr.find('#content-description').text();
	var $hType = tr.find('#content-type').text();
	var $hProvider= tr.find('#content-provider').text();
	var $hApproved= tr.find('#content-approved').text();
	
	copyDetails($hId, 'admin-content-id');
	copyDetails($hTitle, 'admin-content-title');
	copyDetails($hDescription, 'admin-content-description');
	copyDetails($hType, 'admin-content-type');
	copyDetails($hProvider, 'admin-content-provider');
	setDropdown('admin-content-approved', $hApproved);
	function copyDetails(text, field) {
	  document.getElementById(field).value = text;
	}
});

//Update approval
$(document).on('click', '#admin-form-submit', function(){ 
	var $hId = $('#admin-content-id').val();
	var $hApproved= $('#admin-content-approved').val();
	var $hType= $('#admin-content-type').val();
	
	if ($hApproved == "Yes"){
		$hApproved = "1";
	}
	else{
		$hApproved = "0";
	}
	
	var postData = {id: $hId,isApproved: $hApproved,type: $hType};
	var getIP = sessionStorage.getItem("IP");
	var IP = JSON.parse(getIP);
	API_url = IP + "/admin/approveDisaproveItem";
	approveData(postData, API_url);
});