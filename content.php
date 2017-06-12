 
<div id="irc-content"> 
<?php 
	
		
	if (have_posts()) { 
		$post_type=get_post_type(); 
	
?>
	   
		
		<?php 
			while (have_posts())  {
		?>
			<div <?php post_class();?>>
			
				

			<?php 
			
						
				the_post ();	
				if (has_post_thumbnail()) {  ?>
			 
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('irc_thumb'); ?>
					</a>
	
				<?php 
					 
				}
				
				echo '<h3><a href="'.get_the_permalink().'" title="'.esc_attr(the_title_attribute('echo=0')).'" rel="bookmark">'.get_the_title ().'</a></h3>'; 
			 
				the_content('...read more'); 
			
				echo '<div>'; 
				if ($post_type=='post') { 
					echo 'Categories:' ; 
					echo '<h4>'.the_category (' ,') . '</h4>'; 
					
					
				}
				else { 
				
					irc_get_terms($post_type, get_the_id()); 
				}
				echo '</div></br>'; 
				
				echo '<span>posted on '.get_the_date ('d m Y'),' at ',get_the_time().' by ' .get_the_author (). '</span>'; 
				
				
			?>
			
			

			</div> 
	
		<?php 
		   
						
			}
			
		

		
	}
	
	else {
		
		echo  '<div id="no-posts">there are no post</div> '; 
		
	}
			
	
	
	

			
?>
	
		


</div> 