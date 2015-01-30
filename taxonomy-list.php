<?php 

	$taxonomyName = 'product_cat';
	
	$parentArgs = array(
		'orderby'       		    => 'slug', 
		'order'            			=> 'ASC',
		'hide_empty'      	=> true, 
		'hierarchical'    		=> 1, 
		'child_of'       			=> 0,
		'parent' 					=> 0,
		'pad_counts'      	=> false, 
		'cache_domain'     => 'core'
	); 
	
	$taxonomyParents = get_terms($taxonomyName, $parentArgs); 

if(!empty($taxonomyParents)) : 
?>
	<div class="list-group">
		<h3 class="list-group-item list-group-title">Product Categories</h3>
		
		<?php foreach ($taxonomyParents as $tax) : 
			if ( is_tax($taxonomyName, $tax->name) ) { $activeParent = ' active'; } 
			$count_parent = $tax->count;
			$name_parent = $tax->name;
			$link_parent = get_term_link( $tax );
		?>
			<div class="list-item-container">	
				<a class="list-group-item parent<?php echo $activeParent; ?>" href="<?php echo $link_parent; ?>"><span class="badge"><?php echo $count_parent; ?></span><?php echo $name_parent; ?></a>
				<?php 
					$childArgs = array( 
						'child_of' => $tax->term_id, 
						'hide_empty' => true, 
						'orderby' => 'slug' ); 
					
					$taxonomyChildren = get_terms( $taxonomyName,  $childArgs); 
				?>
				<?php if( !empty($taxonomyChildren) ) : ?>
				
					<div class="children">
						<?php foreach ( $taxonomyChildren as $child ) :  
							if ( is_tax($taxonomyName, $child->name) ) { $activeChild = ' active'; } 
							$count_child = $child->count;
							$name_child = $child->name;
							$link_child = get_term_link( $child );
						?>
						
							<a class="list-group-item child <?php echo $activeChild; ?>" href="<?php echo $link_child; ?>"><span class="badge"><?php echo $count_child; ?></span><?php echo $name_child; ?></a>
						
						<?php $activeChild = ''; endforeach;  ?>
					</div>
					
				<?php endif; ?>
			</div>	
		<?php $activeParent = ''; endforeach; ?>
	</div>
<?php endif; ?>