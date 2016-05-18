<?php
	define("TITLE", "Song | Acoustics Hour");
	include('includes/header.php');

// Fuction for security issues
	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input );
		return $output;
	}
// end

	if(isset($_GET['item'])) {
		$songItem = strip_bad_chars( $_GET['item'] );
		$song = $songItems[$songItem];
	}
?>

<!-- HTML -->
<div class="wrapper">
	<section id="song-description">
		<h3><?php echo $song[title]; ?></h3>
    	<p><?php echo $song[description]; ?></p>
	</section>
	<section id="song-video">
		<iframe <?php echo $song[link]; ?> frameborder="0" allowfullscreen></iframe>
	</section>
	<div id="chords">
		<ul>
			<?php echo $song[chords]; ?>
		</ul>
	</div>
</div>
    
 <?php
	include('includes/footer.php');
?>