<?php
	define("TITLE", "Home | Acoustics Hour");
	include('includes/header.php');
	$show_arrow_up = "Yes";
?>

<div id="home">
			<div class="wrapper">
				<div id="circle" class="fadein">
					<a href="tutorials.php"><img src="icons/circle.png" alt="Circle image"></a>
				</div>
				<div class="arrow-down">
					<a href="#about"><img src="icons/arrow-down.svg" alt="Down"></a> 
				</div>
			</div>
		</div>

</div> <!-- end of general -->

<div id="about">
	<div class="wrapper">
		<section>
			<h1>About</h1>
			<img class="profile-photo" src="photo/me_with_guitar2.jpg" alt="Photograph of Andrii Shumylo">
			<div>
				<p>Hi, I'm Andrey. All you see here is my own website and video <a href="tutorials.php">tutorials</a> made solely by me.
				I've managed to make <a href="#header">acousticshour.com</a> at the point when I realized that playing guitar is easy if you know where to start and how to develop your skills the right way.
				I'm here to share with you my experience absolutely free without any hidden charges.
				In my opinion you don't need much theory and a long way passing through boring phase of self learning, you only need to start playing your favourite songs.
				Like I did. Just subscribe to my <a href="https://www.youtube.com/channel/UC1OZu-nk3LbQB4TDL74WeZA">youtube</a> channel and I'll show you everything. 
				This website is made for your comfort so that you can find all my videos <a href="tutorials.php">here</a>.
				</p>
				<p>
				Note that this website operates with a 100% free publication policy. It's sustained solely by ad revenue and user donations.
				To help keep my project afloat or in case you appriciate my work I kindly ask that you disable adblockers or consider making a voluntary donation.
				</p> 
	         	<p>Cheers,<br>Andrey</p>
	         	<div id="donations" class="slide-right">
		         	<img src="icons/webmoney256x.png" alt="Webmoney">
		         	<p>USD: Z396692412941<br>
					EUR: E275011935260<br>
					UAH: U107631477888<br>
					Use these accounts to support acousticshour.com</p>
		        </div>
         	</div>
		</section>	
	</div>
</div>

<!-- <div id="how-it-works">
	<div class="wrapper">
		<h1>How it works?</h1>
	</div>
</div>	 -->

<?php
	include('includes/footer.php');
?>