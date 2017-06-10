<?php 

	get_header('left'); 
	
	

	$img=brd_image (); 

	

?>
<div id="header-content-sidebar-wrapper" style='background:url("<?php echo esc_url($img);?>"'>

<?php 

	get_header('top'); 

	
	
?>
	<div id="irc-content-animal"> 

		<?php 
		 
			irc_comments (); // function 
			if (has_post_thumbnail()) {  ?>
						
				
					<a href="<?php the_permalink(get_post_thumbnail_id ()); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('single_post_thumb'); ?>
					</a>
					
			<?php 
					
				the_title ('<p class="with-img" id="irc-animal-title">','</p>');  
				
				echo '<p class="with-img" id="irc-animal-date"><i>posted on '.get_the_date ('d m Y'),' at ',get_the_time().' by ' .get_the_author ().'</i></p>'; 
				
				echo '<p class="with-img" id="irc-animal-cat">';
				
					irc_get_terms(get_post_type(), get_the_id()); 
									
				echo '</p>';
				
				
				
			}
			
			else { 
			
		
				the_title ('<p class="without-img" id="irc-post-title">','</p>');  
				
				echo '<p class="without-img" id="irc-animal-date"><i>posted on '.get_the_date ('d m Y'),' at ',get_the_time().' by ' .get_the_author ().'</i></p>'; 
				
				echo '<p class="without-img" id="irc-animal-cat">';
					
					irc_get_terms(get_post_type(), get_the_id()); 
										  
				echo '</p>';
				
				
				
			}
			
			
			echo '<div class="raw-content-animal">'; 
			the_content ();  
			echo '</div>'; 
				
		   
		?> 
		
		<?php  
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
		?>
					   
	   
	</div> 
	
	
			
</div> 

<?php get_footer (); ?> 