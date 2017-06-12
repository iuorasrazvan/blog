<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
	
	<body <?php body_class();?>> 
	
		<div class="wrapper"> 

			<div id="header-left">
				<div id="header-img" style='background:url("<?php header_image();?>"); '>
					<?php 
						if (function_exists('the_custom_logo')) {
							the_custom_logo (); 
						}
					?>
				
					<h2><a href="<?php bloginfo('home');?>" title="<?php bloginfo('description');?>"><?php bloginfo('name');?></a></h2>
					
					<div class="description"> 
						<h3><?php bloginfo('description');?></h3>
					</div> 
					<?php get_search_form ();?>  
					
					<?php 
						$post_type=get_post_type();
						if ($post_type!='page') { 
							if (is_single()) {
								irc_post_navigation ();
								
							}
							
							else {
								irc_posts_navigation (); 
							}
						
						
						}  
					?> 
					
					
					<ul id="sidebar-left">
						<?php 
						    
							
							
							switch ($post_type) {
								case 'post' : 
									if(is_active_sidebar('sidebar-left-posts')): 
									
										dynamic_sidebar('sidebar-left-posts'); 
									endif; 
									
									break; 
								
								case 'gardening' : 
								
									if(is_active_sidebar('sidebar-left-gardenings')): dynamic_sidebar('sidebar-left-gardenings'); 
									
									endif; 
									break; 
									
								case 'animal_keeping' : 
							
								if(is_active_sidebar('sidebar-left-animals')): dynamic_sidebar('sidebar-left-animals'); 
								
								
									
								endif;  
								break; 
								
								default: 
									if(is_active_sidebar('sidebar-left-posts')): dynamic_sidebar('sidebar-left-posts'); 
						
										
									endif; 

							}
						
						
						
						?>
						
					
						
					</ul>
					
				
				
				
				</div>
				
			</div> 
		

