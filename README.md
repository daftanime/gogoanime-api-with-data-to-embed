# gogoanime api with data to embed on your websites and blogs for free
<br>
<img src="https://raw.githubusercontent.com/sizzlingkenny/gogoanime-api-with-data-to-embed/main/animes.gif">
<br>
Gogoanime API developed by https://www.2embed.cc/ and comes with complete data from old and new anime cartoon videos to embed on your websites and blogs with multiple player options to choose from

<br><br><br>
<strong>Source URL: https://www.2embed.cc/animelist</strong>
<br>
<strong>Live Working Site: https://gogoanime9.xyz/</strong>

<br><br><br>

<h2>API USAGE EXAMPLE</h2>
<code>
&#60;?php
	// if you want automatic anime updates then keep using the below url otherwise download .json file on your server.
	$anivids = 'https://raw.githubusercontent.com/sizzlingkenny/gogoanime-api-with-data-to-embed/main/data.json';
	$json = file_get_contents($anivids);		
	$data = json_decode($json, true);
	$loop = $data[0]['data'];
	
	foreach($loop as $jsonArrayKeyz => $jsonArrayValue){
		
		$title = $jsonArrayValue['title'];
		$category = $jsonArrayValue['category'];
		$year = $jsonArrayValue['year'];
		$genres = $jsonArrayValue['genres'];
		$thumb = $jsonArrayValue['thumb'];
		$description = $jsonArrayValue['description'];
		$gogo_url = $jsonArrayValue['gogo_url'];
?>
<h2>Embed Iframe Video Example</h2>
<iframe src="https://www.2embed.cc/embedanime&#60;?php echo $gogo_url;?&#62;" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen></iframe>	
</code>

<h3>please refer to "example.php" for detailed usage with codes</h3>
Good Luck..!!
