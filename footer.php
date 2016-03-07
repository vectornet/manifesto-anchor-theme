	<footer class="site-footer clearfix">
		<div class="container">
			<p class="site-copyright">&copy; <?php echo date("Y"); ?> <?php echo site_name(); ?></p>
			<p class="site-credits">Built with <a href="http://anchorcms.com">Anchor CMS</a>, <a href="http://getskeleton.com">Skeleton</a>, &amp; <a href="http://jpanelmenu.com">JPanelMenu</a>.</p>
		</div>
	</footer>

		<!-- jQuery freshly squeezed -->
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
		<!-- If they're out, grab some locally -->
		<script>window.jQuery || document.write('<script src="<?php echo theme_url('/js/jquery.js'); ?>"><\/script>')</script>

		<!-- Custom JS -->
		<script src="<?php echo theme_url('/js/scripts.js'); ?>"></script>
		<script src="<?php echo theme_url('/js/jpanelmenu.min.js'); ?>"></script>

		<!-- Piwik -->
		<script type="text/javascript">
  			var _paq = _paq || [];
  			_paq.push(['trackPageView']);
  			_paq.push(['enableLinkTracking']);
  			(function() {
    				var u="https://analytics.vectornet.etc.br/";
    				_paq.push(['setTrackerUrl', u+'piwik.php']);
    				_paq.push(['setSiteId', 7]);
    				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    				g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  			})();
		</script>
		<noscript><p><img src=https:"//analytics.vectornet.etc.br/piwik.php?idsite=7" style="border:0;" alt="" /></p></noscript>
		<!-- End Piwik Code -->


	</body>
</html>
