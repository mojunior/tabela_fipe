<html>

<meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="author" content="mojunior">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="../js/fetch.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<?php

$url1 = 'http://fipeapi.appspot.com/api/1/carros/veiculos/21.json';

$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 //curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

$json = json_decode(curl_exec($ch), true); 
echo "<h2>veiculos</h2>";
echo "<table border='2' >
		<tr>
			<th>id</th>
			<th>fipe_marca</th>
			<th>name</th>
			<th>marca</th>
			<th>key</th>
			<th>fipe_name</th>
		</tr>";
foreach($json as $i => $item) {
   
	echo "<tr><td>" . $json[$i]['id']
	. "</td><td>" . $json[$i]['fipe_marca'] 
	. "</td><td>" . $json[$i]['name']
	. "</td><td>" . $json[$i]['marca'] 
	. "</td><td>" . $json[$i]['key']
	. "</td><td>" . $json[$i]['fipe_name']
	. "</td></tr>";
	// echo $json[$i]['fipe_name'] . "<br>";
    // $array[$i] is same as $item
}

?>

</table>
</body>
</html>
