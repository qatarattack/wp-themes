<?php
/**
 * Template Name: Sale
 *
 * The sale template displays products on sale 
 *
 * @package WooFramework
 * @subpackage Template
 */

 get_header();
 global $woo_options;
 
?>
    <!-- #content Starts -->
    <div id="content" class="col-full">
    
        <!-- #main Starts -->
        <section id="main" class="col-left">      
                    
		<?php if ( isset( $woo_options['woo_breadcrumbs_show'] ) && $woo_options['woo_breadcrumbs_show'] == 'true' ) { ?>
			<section id="breadcrumbs">
				<?php woo_breadcrumbs(); ?>
			</section><!--/#breadcrumbs -->
		<?php } ?>  
	        	
			<?php if ( have_posts() ) { $count = 0; while ( have_posts() ) { the_post(); $count++; ?>                                                           
	            <article <?php post_class(); ?>>
					
					<header>
				    	<h1><?php the_title(); ?></h1>
					</header>
					
	                <section class="entry">
	                	<?php the_content(); ?>
	
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'woothemes' ), 'after' => '</div>' ) ); ?>
	               	</section><!-- /.entry -->
		                
	            </article><!-- /.post -->
	            
	            <?php } } ?>	
				        	
	        	<?php
	        		global $wp_query, $woocommerce;
	        		
	        		// Get products on sale
					if ( false == ( $product_ids_on_sale = get_transient( 'wc_products_onsale' ) ) ) :
					
						$meta_query = array();
					    $meta_query[] = array(
					    	'key' => '_sale_price',
					        'value' 	=> 0,
							'compare' 	=> '>',
							'type'		=> 'NUMERIC'
					    );
				
						$on_sale = get_posts(array(
							'post_type' 		=> array('product', 'product_variation'),
							'posts_per_page' 	=> -1,
							'post_status' 		=> 'publish',
							'meta_query' 		=> $meta_query,
							'fields' 			=> 'id=>parent'
						));
						
						$product_ids_on_sale = array_unique(array_merge(array_values($on_sale), array_keys($on_sale)));
						
						set_transient( 'wc_products_onsale', $product_ids_on_sale );
								
					endif;
					
					$product_ids_on_sale[] = 0;
					
					$meta_query = array();
					$meta_query[] = $woocommerce->query->visibility_meta_query();
				    $meta_query[] = $woocommerce->query->stock_status_meta_query();
					    
					// Main query for loop
					$query_args = array(
			    		'no_found_rows' => 1,
			    		'post_status' 	=> 'publish',
			    		'post_type' 	=> 'product',
			    		'orderby' 		=> 'date',
			    		'order' 		=> 'ASC',
			    		'meta_query' 	=> $meta_query,
			    		'post__in'		=> $product_ids_on_sale
			    	);
			
					$r = new WP_Query($query_args);
			
					if ( $r->have_posts() ) :
	        	
	        		echo '<ul class="products">';
	        			
	        			while ($r->have_posts()) : $r->the_post(); global $product;
							
							woocommerce_get_template_part( 'content', 'product' );
				
						endwhile; // end of the loop
						
					echo '</ul>';
					
					endif;
	        		
	        		do_action('woocommerce_pagination');
	        		
	        		wp_reset_query();
	        	?>	
		
        </section><!-- /#main -->
            
		<?php get_sidebar(); ?>

    </div><!-- /#content -->    
		
<?php get_footer(); ?>