<div id="irc-sidebar"> 

<?php 
	
	 $post_type=get_post_type();
?> 
	<ul class="sidebar-<?php echo $post_type;?>"> 

		<?php 
			 switch ($post_type) {
				 case 'post' : 
					if(is_active_sidebar('sidebar-right-posts')): dynamic_sidebar('sidebar-right-posts'); 
					else: echo '<h2> No posts archive </h2>';
					
					endif; 
					break; 
				
				case 'gardening' : 
				 
					if(is_active_sidebar('sidebar-right-gardenings')): dynamic_sidebar('sidebar-right-gardenings'); 
					
					else: echo '<h2> No gardening archive </h2>';
					
					endif;
					break; 
					
				case 'animal_keeping' : 
				 
					if(is_active_sidebar('sidebar-right-animals')): dynamic_sidebar('sidebar-right-animals'); 
					
					else: echo '<h2> No animal archive </h2>';
					
					endif;
					break; 
					
			 }
			
		?> 
		
		<li><?php wp_meta();?></li> 
	</ul> 


</div> 