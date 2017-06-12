<?php 
   
	function irc_after_setup_theme () {

			
		
		if(!isset($content_width))   {
			
			$content_width=600; 
		}
		
		
		add_theme_support ('automatic-feed-links'); 
		add_theme_support ('custom-background'); 
		$custom_header_args=array (
			'width'=>273,
			'height'=>788,
			'flex_width'=>true,
			'flex_hight'=>true, 
			'default_image'=>get_template_directory_uri().'/images/pescuit1.jpeg',
		); 
		$headers=array (
			'header1'=>array (
				'url'=>get_template_directory_uri().'/images/pescuit1.jpeg',
				'description'=>'la pescuit de crachi' 
			
			),
			
		);
		
	
		add_theme_support ('custom-header', $custom_header_args); 
		
		
		add_theme_support ('post-thumbnails'); 
		
		add_theme_support ('post-formats',array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat') ); 
		add_theme_support ('widgets'); 
		add_theme_support('title-tag');  
		
		$args = array(
		
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		);
		
		add_theme_support( 'html5', $args ); 
		
		$args=array (
			'height'      => 80,
			'width'       => 80,
			'flex-width' => true,
			
		); 
		
		add_theme_support( 'custom-logo', $args );
		
		add_action ('widgets_init', 'irc_widget_init'); 
		
		add_action('init', 'irc_register_nav_menu'); 
		
		add_action('wp_enqueue_scripts','irc_enqueue_scripts'); 
		
		
		
		
	} // end of theme setup 
	
	function irc_register_nav_menu () {
		
		register_nav_menu ('menu1', 'Menu 1');
		
		register_nav_menu ('menu2', 'Menu 2');
	}
	

	
	function irc_widget_init () {
		
		
		register_sidebar (array('name'=>'Sidebar left posts','id'=>'sidebar-left-posts'));
		register_sidebar (array('name'=>'Sidebar left gardenings', 'id'=>'sidebar-left-gardenings'));
		register_sidebar (array('name'=>'Sidebar left animal keeping','id'=>'sidebar-left-animals')); 
		register_sidebar (array('name'=>'Sidebar meta','id'=>'sidebar-meta')); 
		register_sidebar (array('name'=>'Sidebar right posts','id'=>'sidebar-right-posts')); 
		register_sidebar (array('name'=>'Sidebar right gardenings','id'=>'sidebar-right-gardenings')); 
		register_sidebar (array('name'=>'Sidebar right animals','id'=>'sidebar-right-animals')); 
	}


	function irc_enqueue_scripts () {
		
		wp_enqueue_style ('level1', get_stylesheet_uri());
		
	}

	add_action ('after_setup_theme', 'irc_after_setup_theme'); 
	
	add_action ('after_setup_theme', 'irc_register_gardening'); 
	
	
	function irc_register_gardening () {
		
		register_post_type ('gardening',
			array ( 
			    'label'=>'gardenings', 
				'labels'=> array (
					'name'=>'Gardenings',
					'singular_name'=>'gardening',
				), 
				
				'public'=>true, 
				'supports'=>array ('title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions','content'), 
				'taxonomies'=>array ('seeding','feeding','defending','maintaining','harvesting','preparing','conserving'), 
				'has_archive'=>true, 
				'query_var'=>'gardening', 
				'delete_with_user'=>false, 
				
			  
				
			
		    )
			
		);
		
		
		$seeding_args=array (
			'labels'=>array (
				'name'=>'Seeding',
				'singular_name'=>'seeding',
				
			),
			'public'=>true, 
			'show_admin_column'=>true, 
			'hierarchical'=>true, 
			'rewrite'=>array (
				'hierarchical'=>true, 
			)
		
		
		);
		
		register_taxonomy ('seeding','gardening',$seeding_args); 
		
		register_taxonomy_for_object_type ('seeding','gardening'); 
		
		
		$feeding_args=array (
			'labels'=>array (
				'name'=>'Feeding',
				'singular_name'=>'feeding',
				
			),
			'public'=>true, 
			'show_admin_column'=>true, 
			'hierarchical'=>true, 
			'rewrite'=>array (
				'hierarchical'=>true, 
			)
		
		
		);
		
		register_taxonomy ('feeding', array ('gardening','animal_keeping'), $feeding_args); 
		
		register_taxonomy_for_object_type ('feeding','gardening'); 
		
		
		$defending_args=array (
			'labels'=>array (
				'name'=>'Defending',
				'singular_name'=>'defending',
				
			),
			'public'=>true, 
			'show_admin_column'=>true, 
			'hierarchical'=>true, 
			'rewrite'=>array (
				'hierarchical'=>true, 
			)
		
		
		);
		
		register_taxonomy ('defending',array('gardening','animal_keeping'),$defending_args); 
		
		register_taxonomy_for_object_type ('defending','gardening'); 
		
				
		$maintaining_args=array (
			'labels'=>array (
				'name'=>'Maintaining',
				'singular_name'=>'maintaining',
				
			),
			'public'=>true, 
			'show_admin_column'=>true, 
			'hierarchical'=>true, 
			'rewrite'=>array (
				'hierarchical'=>true, 
			)
		
		
		);
		
		register_taxonomy ('maintaining','gardening',$maintaining_args); 
		
		register_taxonomy_for_object_type ('maintaining','gardening'); 
		
		
		$harvesting_args=array (
			'labels'=>array (
				'name'=>'Harvesting',
				'singular_name'=>'harvesting',
				
			),
			'public'=>true, 
			'show_admin_column'=>true, 
			'hierarchical'=>true, 
			'rewrite'=>array (
				'hierarchical'=>true, 
			)
		
		
		);
		
		register_taxonomy ('harvesting','gardening',$harvesting_args); 
		
		register_taxonomy_for_object_type ('harvesting','gardening'); 
		
		
		$preparing_args=array (
			'labels'=>array (
				'name'=>'Preparing',
				'singular_name'=>'preparing',
				
			),
			'public'=>true, 
			'show_admin_column'=>true, 
			'hierarchical'=>true, 
			'rewrite'=>array (
				'hierarchical'=>true, 
			)
		
		
		);
		
		register_taxonomy ('preparing','gardening',$preparing_args); 
		
		register_taxonomy_for_object_type ('preparing','gardening'); 
		
		
		$conserving_args=array (
			'labels'=>array (
				'name'=>'Conserving',
				'singular_name'=>'conserving',
				
			),
			'public'=>true, 
			'show_admin_column'=>true, 
			'hierarchical'=>true, 
			'rewrite'=>array (
				'hierarchical'=>true, 
			)
		
		
		);
		
		register_taxonomy ('conserving','gardening',$conserving_args); 
		
		register_taxonomy_for_object_type ('conserving','gardening'); 
		
		
		register_post_type ('animal_keeping',
			array ( 
			    'label'=>'animal', 
				'labels'=> array (
					'name'=>'Animal keeping',
					'singular_name'=>'animal_keeping',
				), 
				
				'public'=>true, 
				'supports'=>array ('title','content', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions'), 
				'taxonomies'=>array ('feeding','defending','hosting'), 
				'has_archive'=>true, 
				'query_var'=>'animal', 
				'delete_with_user'=>false, 
					
		    )
			
		);
		
		
		$hosting_args=array (
			'labels'=>array (
				'name'=>'Hosting',
				'singular_name'=>'hosting',
				
			),
			'public'=>true, 
			'show_admin_column'=>true, 
			'hierarchical'=>true, 
			'rewrite'=>array (
				'hierarchical'=>true, 
			)
		
		
		);
		
		register_taxonomy ('hosting','animal_keeping',$hosting_args); 
		
		register_taxonomy_for_object_type ('hosting','animal_keeping'); 
		
				
	}
	
	add_action ('init', 'irc_add_image_size'); 
	
	function irc_add_image_size ()  {
		
		
		add_image_size ('irc_img', 1093, 740, true); 
		
		add_image_size ('single_post_thumb', 400, 300, true); 
		
		add_image_size ('irc_thumb', 208, 208, true); 
		
		add_image_size ('img_att_page', 800, 600, true); 
		
	}   
	
	
	function irc_posts_navigation () {
			?> 
		
		<div class="navigation"> 
				
					
							<?php
								
								if (get_previous_posts_link()) previous_posts_link ('<span>&laquo; previous posts </span>');
								
								else echo "<span class='alignleft'>No previous posts</span>"; 
					
								
								if (get_next_posts_link()) next_posts_link ('<span>next posts &raquo;</span>');
									
									else echo "<span class='alignright'>No next posts</span>"; 
								
							?>  
						
				
					
		</div> 
			<?php 
		
	}
	
	
	function irc_post_navigation () {
		
		$post_type=get_post_type(); 
		?> 
		
		<div class="navigation"> 
				
					  
						<?php
							
							if (get_previous_post_link())  {
								
								
								previous_post_link ('%link','<span class="alinleft">previous post</previous>');
								
							}
							
							else echo '<span class="alignleft">no previous post </span>'; 
						?>
					
						
						<?php 
							
							if (get_next_post_link()) {
								
					
								next_post_link ('%link','<span class="alignright">next post </span>');
							}
								
								else echo "<span class='alignright'>no next post</span>"; 
							
						?>  
					
				
					
		</div> 
		
		<?php 
		
	}
	
	
	function irc_get_terms ($post_type, $post_id)  {
		
		
		$taxs=get_object_taxonomies ($post_type,'objects');  
	
					
		$dis=0;
		foreach ( $taxs as $key=>$value ) { 
			
			$terms = wp_get_object_terms( $post_id, $value->name );
			if ( ! empty( $terms ) ) {
				if ( ! is_wp_error( $terms ) ) {
					
						echo  $value->labels->name; echo ': '; 
						foreach( $terms as $term ) {
							
							echo '<a href="' . get_term_link( $term->slug, $value->name) . '">' . esc_html( $term->name ) . '</a>'; 
							echo ', ';
							$dis=1; 
						}
				
				}
			}
			
			
		}
		if ($dis==0) { 
			echo 'No distribution'; 
		}
							  
		
							  
							
		
		
	}
	
	
	function irc_comments () {
		 echo '<div id="irc-comment-popup">'; 
			
				comments_popup_link('No Comments »', '1 Comment on  <i>'.get_the_title().'</i>' , '% Comments on  <i>'.get_the_title().'</i>');
			
		 echo '</div>'; 
		
		
	}


	
	function brd_image ()  {
		
		
		$post_type=get_post_type ();  
		$img=get_template_directory_uri ().'/images/pamant.jpg';
		if ($post_type=='gardening')  {
			$img=get_template_directory_uri ().'/images/prun.jpg';
			
			
		}
		
		elseif ($post_type=='animal_keeping')  {
			$img=get_template_directory_uri ().'/images/cocos.jpg';
		}
		
		
		
		return  $img; 
	}
	
	
	
	
	

	
	
	

	
	
	
		
	
	
	
	


