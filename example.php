<?php
	$anivids = 'https://raw.githubusercontent.com/sizzlingkenny/gogoanime-api-with-data-to-embed/main/data.json';
	$json = file_get_contents($anivids);		
	$data = json_decode($json, true);
	$loop = $data[0]['data'];
	
	$counter = 0;
	
	foreach($loop as $jsonArrayKeyz => $jsonArrayValue){
			if ($counter >= 5) {
			   break;
			}	
		
		$title = $jsonArrayValue['title'];
		$category = $jsonArrayValue['category'];
		$year = $jsonArrayValue['year'];
		$genres = $jsonArrayValue['genres'];
		$thumb = $jsonArrayValue['thumb'];
		$description = $jsonArrayValue['description'];
		$gogo_url = $jsonArrayValue['gogo_url'];
?>
	<p><strong>Title:</strong> <a href="<?php echo $gogo_url;?>"><?php echo $title;?></a></p>		
	<p><strong>Thumb:</strong> <br><img src="<?php echo $thumb;?>" style="width:125px;"></p>
	<p><strong>Category:</strong> <?php echo $category;?></p>
	<p><strong>Released Year:</strong> <?php echo $year;?></p>
	<p><strong>Genres:</strong> <?php echo $genres;?></p>
	<p><strong>Embedded Iframe</strong></p>
	<iframe src="https://www.2embed.cc/embedanime<?php echo $gogo_url;?>" width="100%" height="100%" frameborder="0" scrolling="no" allowfullscreen></iframe>	
	<br>
	<hr>
	<p><strong>Plot:</strong> <?php echo $description;?></p>					
<?php 
	$counter++;						
}
?>