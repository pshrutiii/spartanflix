<?php

$name = "Bill";
print "<h4>My name is $name</h4>";
echo '<h4>My name is $name</h4>';
//echo 'What's wrong here?';
if($name == "Bill"){
	print "Yes, you're bill"; 
	print "<br/>";
}

$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = explode(" ", $pizza);
print_r($pieces);
echo "<br/>";

echo "Number of element in the array = " . count($pieces);
echo "<br/> Current pointer at: " . key($pieces);
echo "<br/> Next element value:" . next($pieces);

echo "<br/>";
/***Returns –1 if string 1 < string 2
Returns 0 if string 1 = string 2
Returns 1 if string 1 > string 2**/
print "String comparing = " . strcmp($name, "Bill");

echo "<br/>";
// get host name from URL
preg_match('@^(?:http://)?([^/]+)@i',
    "http://www.php.net/index.html", $matches);
$host = $matches[1];
print $host;

echo "<br/>";
$concatinate = "I would like to concatinate Mr. " . $name;
echo $concatinate;
phpinfo()


?>