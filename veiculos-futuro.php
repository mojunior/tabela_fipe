<html>

<meta charset="UTF-8">
<body>
<?php

$url1 = 'http://fipeapi.appspot.com/api/1/carros/veiculo/21/4828.json';

$ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, $url1);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 //curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-Key: ' . $apiKey));

$json = json_decode(curl_exec($ch), true); 
echo "<h2>veiculos futuro</h2>";
echo "<table border='2' >
		<tr>
			<th>id</th>
			<th>fipe_codigo</th>
			<th>name</th>
			<th>marca</th>
			<th>key</th>
            <th>veiculo</th>
			<th>fipe_marca</th>
		</tr>";
foreach($json as $i => $item) {
   
	echo "<tr><td>" . $json[$i]['id']
	. "</td><td>" . $json[$i]['fipe_codigo'] 
	. "</td><td>" . $json[$i]['name']
	. "</td><td>" . $json[$i]['marca'] 
	. "</td><td>" . $json[$i]['key']
    . "</td><td>" . $json[$i]['veiculo']
	. "</td><td>" . $json[$i]['fipe_marca']
	. "</td></tr>";
	// echo $json[$i]['fipe_name'] . "<br>";
    // $array[$i] is same as $item
}

?>

</table>
</body>
</html>
