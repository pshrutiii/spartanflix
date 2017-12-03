function addDropdowns(selId, variable, json){
		var sel = document.getElementById(selId);
		for (var i in json) {
			var opt = document.createElement('option');
			opt.innerHTML = json[i][variable];
			opt.value = json[i][variable];
			sel.appendChild(opt);
		}
	}
	function getSubscriptionData(url){	 
 
		$.getJSON( url, { format: "json"} )
			.done(function( json ) {
				addDropdowns('change-plan_id', 'id', json);
				/*addDropdowns('change-plan_title', 'title', json);
				addDropdowns('change-plan_price', 'price', json);
				addDropdowns('change-plan_duration', 'duration', json);*/
									
			})
			.fail(function( jqxhr, textStatus, error ) {
				var err = textStatus + ", " + error;
				console.log( "Request Failed: " + err );
			});
	}
	
	function updateSubscriptionData(postData, url){
		$.getJSON( url, { format: "json"} )
			.done(function( json ) {
				alert(json['id']);
			})
			.fail(function( jqxhr, textStatus, error ) {
				var err = textStatus + ", " + error;
				console.log( "Request Failed: " + err );
			});
	}
	
	$(document).on('click', '#change-plan-btn', function(){ 
		var readSessionData = sessionStorage.getItem("viewerInfo");
		var output = JSON.parse(readSessionData);
		var $viewerId = output["id"];
		var $subscriptionId = output["subscriptionId"];

		API_url = "http://52.52.157.178:3000/viewer/getAllSubscriptions?viewerId=" + $viewerId + "&subscriptionId=" + $subscriptionId 
		getSubscriptionData(API_url);
		
	});
	
	$(document).on('click', '#change-plan-update', function(){ 
		var readSessionData = sessionStorage.getItem("viewerInfo");
		var output = JSON.parse(readSessionData);
		var $viewerId = output["id"];
		var $subscriptionId = $( "#change-plan_id option:selected" ).text();
		var postData = {viewerId: $viewerId, subscriptionId: $subscriptionId};

		API_url = "http://52.52.157.178:3000/viewer/changeSubscription";
		updateSubscriptionData(postData, API_url);

	});