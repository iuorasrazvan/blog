
	<?php 
		echo 'archive'; 
		get_header ('left'); 
		
		$img=brd_image ();  
	
	?> 
	<div id="header-content-sidebar-wrapper" style='background:url("<?php echo esc_url($img);?>"'>
	<?php                                                  
		                                           
		get_header('top');                                 
		                                                   
	                               
	                                                       
		get_template_part('content'); 
			
	
		get_sidebar (); 
	
	?> 
		
	</div> 
	
	<?php 
		
		get_footer (); 
				
	?>
	
		
		
		
		
		

