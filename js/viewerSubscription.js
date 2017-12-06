function addDropdowns(selId, variable, json){
		var sel = document.getElementById(selId);
		for (var i in json) {
			var opt = document.createElement('option');
			opt.innerHTML = "Plan " + json[i][variable] +" - $" + json[i]["price"] ;
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
		var $subscriptionId = output["subscriptionId"];

		var getIP = sessionStorage.getItem("IP");
		var IP = JSON.parse(getIP);
		API_url = IP + "/viewer/getAllSubscriptions?subscriptionId=" + $subscriptionId;
		getSubscriptionData(API_url);
		
	});
	
	$(document).on('click', '#change-plan-update', function(){ 
		var readSessionData = sessionStorage.getItem("viewerInfo");
		var output = JSON.parse(readSessionData);
		var $viewerId = output["id"];
		var $subscriptionId = $( "#change-plan_id option:selected" ).text();
		alert
		var postData = {viewerId: $viewerId, subscriptionId: $subscriptionId};

		var getIP = sessionStorage.getItem("IP");
		var IP = JSON.parse(getIP);
		API_url = IP + "/viewer/changeSubscription";
		updateSubscriptionData(postData, API_url);

	});