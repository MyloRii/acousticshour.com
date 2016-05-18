<?php
	define("TITLE", "Tutorials | Acoustics Hour");
	include('includes/header.php');
?>

<div class="wrapper">
	<section>
		<table class="fadein">
			<thead>
				<tr>
					<th scope="col">Artist</th>
					<th scope="col">Song</th>
					<th scope="col">Difficulty</th>
					<th scope="col">Cover</th>
					<th scope="col">Tutorial</th>
				</tr>
			</thead>
				<?php 
					include('includes/sql.php');
				?>
		</table>
	</section>	
</div>

<?php
	include('includes/footer.php');
?>