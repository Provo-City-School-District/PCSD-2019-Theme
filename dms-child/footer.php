<footer id="mainFooter">
			<section id="teacherAccess">
				<h1 class="teacherActivate"><a href="https://dixon.provo.edu/teacher-access/">Teacher Access</a></h1>

				<ul class="imagelist">
			<?php
			// create a new cURL resource
			$globalfooter = curl_init();
			// set URL and other appropriate options
			curl_setopt($globalfooter, CURLOPT_URL, 'https://globalassets.provo.edu/globalpages/teacher_access_menu.php');
			curl_setopt($globalfooter, CURLOPT_HEADER, 0);
			// grab URL and pass it to the browser
			curl_exec($globalfooter);
			// close cURL resource, and free up system resources
			curl_close($globalfooter);
			?>
		</ul>
			</section>
			<?php
		// create a new cURL resource
		$globalfooter = curl_init();
		// set URL and other appropriate options
		curl_setopt($globalfooter, CURLOPT_URL, 'https://globalassets.provo.edu/globalpages/ada-footer.php');
		curl_setopt($globalfooter, CURLOPT_HEADER, 0);
		// grab URL and pass it to the browser
		curl_exec($globalfooter);
		// close cURL resource, and free up system resources
		curl_close($globalfooter);
	?>

		</footer>
		<?php wp_footer(); ?>
		<script type="text/javascript" src="//customer.cludo.com/scripts/bundles/search-script.min.js"></script>
		<script>
		var CludoSearch;
		(function () {
		    var cludoSettings = {
		        customerId: 10000352,
		        engineId: 10000520,
		        searchUrl: '<?php echo get_home_url(); ?>/search-results/',
		        language: 'en',
		        searchInputs: ['cludo-search-form'],
		        template: 'StandardInlineImages',
		        type: 'inline',
		        initFacets: { "Category": ["Dixon Middle"] }
		    };
		CludoSearch= new Cludo(cludoSettings);
		CludoSearch.init();
		})();
		</script>
		<!--[if lte IE 9]>
		<script src="https://api.cludo.com/scripts/xdomain.js" slave="https://api.cludo.com/proxy.html" type="text/javascript"></script>
		<![endif]-->
</body>
</html>
