<footer>
	<div class="wrapper">
		<div id="social-icons">
			<ul>
				<li><a class="facebook" href="https://www.facebook.com/shumylo.andrii"></a></li>
				<li><a class="youtube" href="https://www.youtube.com/channel/UC1OZu-nk3LbQB4TDL74WeZA"></a></li>
				<li><a class="instagram" href="https://www.instagram.com/shumylo.a/"></a></li>
				<li><a class="soundcloud" href="https://soundcloud.com/shumylo-andrii"></a></li>
			</ul>
		</div>
		<div id="links">
			<ul>
				<li><a href="index.php">Home&nbsp;&nbsp;&nbsp;</a></li>
				<li>|</li>
				<li><a href="tutorials.php">&nbsp;&nbsp;&nbsp;Tutorials&nbsp;&nbsp;&nbsp;</a></li>
				<li>|</li>
				<li><a href="faq.php">&nbsp;&nbsp;&nbsp;FAQ&nbsp;&nbsp;&nbsp;</a></li>
				<li>|</li>
				<li><a href="mailto:acousticshour@gmail.com">&nbsp;&nbsp;&nbsp;Contact</a>
			</ul>
		</div>	
		<div id="contact-for-mobile">
			<a href="mailto:acousticshour@gmail.com">&nbsp;&nbsp;&nbsp;Contact</a>
		</div>
	</div>	
</footer>

<div id="<?php if ($show_arrow_up == "Yes") {echo "arrow-up";} else { echo "arrow-up-no";} ?>">
	<a href="#header"><img class="slide-top" src="icons/arrow-up.svg" alt="Up"></a>
</div>

<div id="copyright-background">
	<div class="wrapper">
		<p id="copyright">&copy; <?php echo date('Y'); ?> Andrii Shumylo</p>
	</div>
</div>

<!-- Scripts -->
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="js/app.js" type="text/javascript" charset="utf-8"></script>
<script src="js/jquery.fadethis.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Script for Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-73367129-1', 'auto');
  ga('send', 'pageview');
</script>


</body>
</html>