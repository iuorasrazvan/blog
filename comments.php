<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
 
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password
 */  
 
if ( post_password_required() )  { 

    return;

}
	
	comment_form (); 

if (have_comments()) {
	
	?>
	    <div id="comments"> 
			<ul <?php comment_class();?>> 
				<?php wp_list_comments ('style=ul'); ?> 
			</ul> 
		
		<?php 
		
			paginate_comments_links (); 
	  echo '</div>'; 

}
     

?> 
	  
