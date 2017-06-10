

<div id="header-top"> 
	

		<ul id="sidebar-top"> 
		   
			
			<?php 
			
				if(is_active_sidebar('sidebar-pages')) dynamic_sidebar ('sidebar-pages'); 
				
			
			?>
			
			<li id="irc-postings">
				<h2>Choose an type of post</h2> 
				<ul> 
					<li>
				
						<a href="<?php bloginfo('url');?>">Personal thoughts</a> 
						
					</li>
					<li>
				
						<a href="<?php bloginfo('url');?>/gardening">Gardening</a> 
						
					</li>
			
					<li> 
						<a href="<?php bloginfo('url');?>/animal_keeping">Animal Keeping</a> 
					
					</li> 
				</ul> 
				
				
				
				
			</li>
			
			<li id="irc-tax">
				<h2>Choose a distribution</h2> 
			
		    <?php 
			   
			  
				$post_type=get_post_type (); 
			
				switch ($post_type) {
					case 'animal_keeping' : $tax_title='Choose an <i>animal Keeping</i> activity';
											$exclude=array(24,25,27,28);
											break;
					case 'gardening' : $tax_title='Chose a <i>gardening</i> activity';
									   $exclude='23';
									   break; 
					default : $tax_title='Chose a <i>category</i>'; 
							  $exclude=0; 
					
				}
				
				
				if($post_type=='page') $post_type='post'; 	
			
			
				$taxs=get_object_taxonomies ($post_type,'objects') ;  
				
			   
		
				
				
			?> 	
				
				
				
	
					<ul>
						<?php 
						  
							foreach ( $taxs as $key=>$value ) { 
							  if ($key!=='post_format') { 
									
									$args=array (
										'title_li'=>'<h3>'.$value->labels->name.'</h3>:', 
										'public'=>true, 
										'taxonomy'=>$key, 
										'show_count'=>1,
										'hierarchical'=>true, 
									
										'show_option_none'=>' no entries ', 
										'exclude'=>$exclude, 
											
										
									); 
									
									wp_list_categories($args);
							  }
							  
							}
							
							
							
			 
						?>
					 
					 </ul>
		
				
		
				
			</li> 
					
					
			
			
			
			<?php if (is_active_sidebar('sidebar-meta')) dynamic_sidebar('sidebar-meta'); ?> 
			
			
		
			
				
			
	
		</ul> 
		
	

	
		
		 
		
	
		
		
		
		
</div> 