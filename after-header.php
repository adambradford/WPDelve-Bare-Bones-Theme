<?php if (is_front_page())  {
		/*	echo "<div class=\"after-header\" style=\"background: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('";
			bloginfo('url');
			echo "/wp-content/uploads/2018/04/image.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center 0%;\"><div class=\"after-header-inner\">";
			$void = genesis_do_post_title();
			echo "</div></div>"; */

	} elseif ( is_page( 'Page name')) { 
			// Insert something here
			
	} elseif ( is_home() | is_singular('post')) {
			// Insert something here
			
	} elseif ( is_category()) {
			// Insert something here
			
	} elseif ( is_tag()) {
			// Insert something here
			
	} elseif ( is_author()) {
			// Insert something here
				
	} else {
			// Insert something here
 } ?>