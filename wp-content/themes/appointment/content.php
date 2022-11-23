<div id="post-<?php the_ID(); ?>" <?php post_class('blog-lg-area-left'); ?>>
	<div class="media">						
	<?php appointment_aside_meta_content(); ?>
		<div class="media-body">
			<?php // Check Image size for fullwidth template
				 appointment_post_thumbnail('','img-responsive');
				 appointment_post_meta_content(); 
				?>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<?php		
				// call editor content of post/page	
				//modificado por cristian para mostrar Leer mas en Pagina de Categoria;
				if ( is_category() || is_archive() ) {
				    the_excerpt();
				} else {
				    the_content( __('Read More', 'appointment' ) );
				} 
				wp_link_pages( );
			   ?>
		</div>
	 </div>
</div>