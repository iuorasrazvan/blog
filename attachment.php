<?php 

	get_header ('left'); 

	$img=brd_image (); 


?> 

<div id="header-content-sidebar-wrapper" style='background:url("<?php echo esc_url($img);?>"'>

<?php 

	get_header('top'); 
?>

	<div id="irc-img"> 
		<?php 
		
			the_post (); 
			$src=wp_get_attachment_image_src(get_the_id(),'large')[0]; 
		?> 
			<a href="<?php echo $src;?>"> <?php echo wp_get_attachment_image(get_the_id(),'img_att_page');?></a> 
		

	</div> 

</div> 


<?php get_footer (); ?>
