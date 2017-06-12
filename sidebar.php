<div id="irc-sidebar"> 

<?php 
	
	   $post_type=get_post_type();

		 switch ($post_type) {
			 case 'post' : 
			 
				if(is_active_sidebar('sidebar-right-posts')): 
				?>
					<ul class="sidebar-<?php echo $post_type;?>"> 
				<?php 
			
					dynamic_sidebar('sidebar-right-posts'); 
						
					echo '</ul>'; 
				
				endif; 
				break; 
			
			case 'gardening' : 
			 
				if(is_active_sidebar('sidebar-right-gardenings')): 
				?>
					<ul class="sidebar-<?php echo $post_type;?>"> 
				<?php 
				
			
					dynamic_sidebar('sidebar-right-gardenings');
						
					echo '</ul>'; 
		
				endif;
				break; 
				
			case 'animal_keeping' : 
			 
				if(is_active_sidebar('sidebar-right-animals')): 
				?>
				
					<ul class="sidebar-<?php echo $post_type;?>"> 
					
				<?php 
			
				
					dynamic_sidebar('sidebar-right-animals'); 
					
					echo '</ul>'; 
				
				
				endif;
				break; 
				
		 }
		
	?> 
		
	<li><?php //wp_meta();?></li> 



</div> 