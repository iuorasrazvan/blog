<?php 
	
	get_header('left'); 
	
	
		$post_type=get_post_type ();  
		$img=wp_get_attachment_image_src(137,'irc_img' , true) [0]; 
		if($post_type=='gardening') { 
			$img=wp_get_attachment_image_src (148,'irc_img', true)[0]; 
		}
		elseif ($post_type=='animal_keeping')  { 
			$img=wp_get_attachment_image_src(133,'irc_img', true )[0]; 
		}

?>

<div id="header-content-sidebar-wrapper"  style='background:url("<?php echo esc_url($img);?>"'>

	<?php
		get_header('top'); 

		get_template_part('content'); 
		
		get_sidebar (); 

	?> 

</div> 