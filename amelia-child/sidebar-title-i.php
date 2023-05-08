<aside id="mainSidebar">
	<h1>Title I</h1>
	<?php //echo do_shortcode( '[titleiMenu]' ); ?>
	<?php 
		$titleI_menu = get_post(623); 
		echo $titleI_menu->post_content;
	?>
</aside>