<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Making an Instagram Magazine | Tutorialzine Demo</title>
        
        <!-- Our Stylesheet -->
        <link rel="stylesheet" href="assets/css/styles.css" />
        
        <!--[if lt IE 9]>
          <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    </head>
    
    <body>

		<div id="magazine" class="centerStart">

		<?php
		
		// You can obtain this client ID from the Instagram API page
		$instagramClientID = '-- enter your client id key here --';
		
		$api = 'https://api.instagram.com/v1/media/popular?client_id='.$instagramClientID;
		$cache = 'cache.txt';
		
		if(file_exists($cache) && filemtime($cache) > time() - 60*60){
			// If a cache file exists, and it is
			// fresher than 1 hour, use it
			$images = unserialize(file_get_contents($cache));
		}
		else{
			// Make an API request and create the cache file
			
			// Fetch the 32 most popular images on Instagram
			$response = file_get_contents($api);
			
			$images = array();
			
			// Decode the response and build an array
			foreach(json_decode($response)->data as $item){
				
				$title = '';
				
				if($item->caption){
					$title = mb_substr($item->caption->text,0,70,"utf8");
				}
				
				$src = $item->images->standard_resolution->url;
			
				$images[] = array(
					"title" => htmlspecialchars($title),
					"src" => htmlspecialchars($src)
				);
			}
	
			// Remove the last item, so we still have 
			// 32 items when when the cover is added
			array_pop($images);
			
			// Push the cover in the beginning of the array
			array_unshift($images,array("title"=>"Cover", "src"=>"assets/img/cover.jpg"));
			
			// Update the cache file
			file_put_contents($cache,serialize($images));
		}
		
		# Generate the markup
		$totalPages = count($images);
		foreach($images as $i=>$image){
		
			?>
			
			<div id="page<?php echo $i+1?>" class="page">
				<div class="img<?php echo $i+1?>">
					<span class="pageNum <?php echo ($i+1)%2? 'right' : 'left'?>"><?php echo $i+1?> // <?php echo $totalPages?></span>
					<img src="<?php echo $image['src']?>" alt="<?php echo $image['title']?>" />
				</div>
			</div>
					
			<?php
			
		}
			
		
		?>			
			
		    
		</div>

        <footer>
	        <h2><i>Tutorial:</i> Making an Instagram Magazine</h2>
            <a class="tzine" href="http://tutorialzine.com/2012/03/instagram-magazine-php-jquery/">Head on to <i>Tutorial<b>zine</b></i> to download this example</a>
        </footer>
        
        <!-- JavaScript includes - jQuery, turn.js and our own script.js -->
		<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		<script src="assets/js/turn.js"></script>
		<script src="assets/js/script.js"></script>

    </body>
</html>