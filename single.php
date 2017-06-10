<?php get_header('left'); 


		
	$img=brd_image (); 
	
		
?> 


<div id="header-content-sidebar-wrapper" style='background:url("<?php echo esc_url($img);?>"'>

<?php 

	
	get_header('top'); 
	

?> 

	
	<div id="irc-content-post"> 
		
	
		<?php 
				
									
			the_post ();
			irc_comments (); // function 

			if (has_post_thumbnail()) {  ?>
						
				
					<a href="<?php the_permalink(get_post_thumbnail_id ()); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail('single_post_thumb'); ?>
					</a>
				
				<?php 
				the_title ('<p class="with-img" id="irc-post-title">','</p>');  
				
				echo '<p class="with-img" id="irc-post-date"><i>posted on '.get_the_date ('d m Y'),' at ',get_the_time().' by ' .get_the_author ().'</i></p>'; 
				
				echo '<p class="with-img" id="irc-post-cat">Categories ';
					the_category(' ,');
					
				echo '</p>';
				
				
				
			
				
			}
			
			else { 
			
		
				the_title ('<p class="without-img" id="irc-post-title">','</p>');  
				
				echo '<p class="without-img" id="irc-post-date"><i>posted on '.get_the_date ('d m Y'),' at ',get_the_time().' by ' .get_the_author ().'</i></h3>'; 
				
				echo '<p class="without-img" id="irc-post-cat">Categories: ';
					the_category(' ,');
				echo '</p>';
				
			
				
			}
			
			
				
			echo '<div class="raw-content-post">'; 
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
	
<?php get_footer ();?>


