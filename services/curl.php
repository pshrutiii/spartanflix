<?php
	
	$my_url = "http://smedia.herokuapp.com/services/all_users.php";
	$hiral_url = "http://hiralparikh.000webhostapp.com/curl_db_interaction.php";
	$ashutosh_url = "http://codewarriors.herokuapp.com/AllUsers.php";

	$result1 = get_data($my_url);
	$result2 = get_data($hiral_url);
	$result3 = get_data($ashutosh_url);

	$array1 = json_decode($result1);
	$array2 = json_decode($result2);
	$array3 = json_decode($result3);


	printf("<table>");
	for($i=0;$i<count($array1);$i++){
		echo "<tr><th>First Name</th><th>Last Name</th><th>E-Mail</th></tr>"; 
		echo "<tr><td>".$array1[$i][0]."</td><td>".$array1[$i][1]."</td><td>".$array1[$i][2]."</td></tr>";
	}
	printf("</table>");
	printf("<table>");
	for($i=0;$i<count($array2);$i++){
		echo "<tr><th>First Name</th><th>Last Name</th><th>E-Mail</th></tr>"; 
		echo "<tr><td>".$array2[$i][0]."</td><td>".$array2[$i][1]."</td><td>".$array2[$i][2]."</td></tr>";
	}
	printf("</table>");
	printf("<table>");
	for($i=0;$i<count($array3);$i++){
		echo "<tr><th>First Name</th><th>Last Name</th><th>E-Mail</th></tr>"; 
		echo "<tr><td>".$array3[$i][0]."</td><td>".$array3[$i][1]."</td><td>".$array3[$i][2]."</td></tr>";
	}
	printf("</table>");


	function get_data($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
		$data = curl_exec($ch);
		curl_close($ch);
		return $data;
	}

?>