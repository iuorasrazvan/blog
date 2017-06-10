<?php 

	get_header ('left'); 

	$img=wp_get_attachment_image_src(137,'irc_img' , true) [0]; 
?> 

<div id="header-content-sidebar-wrapper" style='background:url("<?php echo esc_url($img);?>"'>


<?php 

	get_header ('top'); 


	get_template_part('content-page'); 
	
?> 


</div> 
