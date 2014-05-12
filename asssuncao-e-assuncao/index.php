<?php get_header(); ?>
            	
	<div class="container">
		<div class="column_680 m_bottom_20">
        
        
        <?php 
		/* ================================================================== */
		/* End of Loop */
		/* ================================================================== */
		if ( have_posts() ) : while ( have_posts() ) : the_post();
		?>
        
        
			<div class="column_210 m_top_55">
				<a href="<?php echo get_permalink(); ?>" class="blog_post_title"><?php the_title(); ?></a>
				<p class="blog_info">
					Data: 		<span><?php the_time('F d,') ?></span>&nbsp;&nbsp;<span><?php the_time('Y') ?></span><br />
					Autor:		<span><?php echo the_author_meta('nickname', get_the_author_meta( 'ID' ) ); ?></span><br />
					Comentários:	<span><?php comments_number() ?></span><br />
					Categorias: <span><?php the_category(', '); ?></span>
				</p>
			</div><!--end column_210-->
			<div class="column_440 m_top_65 last">
				<?php if( has_post_thumbnail() ){ the_post_thumbnail('blog'); }else{ ?>
                	<img src="<?php echo get_template_directory_uri(); ?>/images/blank-blog.png">
                <?php } ?>
			</div><!--end column_440-->
			<div class="clear"></div>
			<div class="post_content m_top_15">
				<p><?php content('50') ?></p>
				<a class="button read_more rounded" href="<?php echo get_permalink(); ?>">Leia mais</a>
			</div>
            <div class="clear"></div>
            
		<?php
		/* ================================================================== */
		/* End of Loop */
		/* ================================================================== */
		endwhile;
		?>
        
        <?php
		/* ================================================================== */
		/* Else if Nothing Found */
		/* ================================================================== */
		else :
		?>
        
        <?php if ( is_search() ) { ?>
		<h3>Resultado da busca para: <?php the_search_query(); ?> </h3>
		<p>Desculpe mas os termos de sua busca não tem correspondente em nossa base de dados! Por isso, não pudemos apresentar qualquer resultado</p>
		<?php }else{ ?>
		<h3>Post não encontrado</h3>
		<p>Desculpe-nos, o conteúdo em questão não existe ou foi removido.</p>
		<?php } ?>
        
        <?php
		/* ================================================================== */
		/* End of Loop */
		/* ================================================================== */
		endif;
		?>
            
			<div class="more_post m_top_15 m_bottom_185">
                <?php echo pagination(); ?>
			</div>
             
		</div><!--end column_680-->
        
		<!--sidebar--> 		
		<?php get_sidebar(); ?>
        <!-- End Sidebar -->
        
        
		<div class="clear"></div>
	</div><!--end container-->
	<div class="clear"></div>
	
<?php get_footer(); ?>