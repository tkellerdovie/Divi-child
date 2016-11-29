<?php get_header(); ?>

<div id="main-content" class="test-class-09081">
	<style>
		.et_pb_fullwidth_header_0.et_pb_fullwidth_header {
    			background-image: url(<?php echo site_url(); ?>/wp-content/uploads/payme-newspress-banner.jpg); }
	</style>
	<section class="et_pb_fullwidth_header et_pb_module et_pb_bg_layout_dark et_pb_text_align_left headImage et_pb_fullwidth_header_0">
		<div class="et_pb_fullwidth_header_container left">
			<div class="header-content-container center">
				<div class="header-content">
					<h1><?php wp_title() ?></h1>
				</div>
			</div>
		</div>
		<div class="et_pb_fullwidth_header_overlay"></div>
		<div class="et_pb_fullwidth_header_scroll"></div>
	</section>
	<div class="container">
		<div id="content-area" class="clearfix">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					$post_format = et_pb_post_format();
					if ( has_post_thumbnail() ) { ?>
						<img class="thumbnail-image" src="<?php the_post_thumbnail_url() ?>" />
					<?php } ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
				<?php
					et_divi_post_format_content();

					?>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<!--				<div class="np-category">Press Release</div>
					<div class="np-subtitle"><?php echo get_field('subtitle'); ?></div> -->
					<div class="np-locationdate"><?php echo get_the_date(); ?></div>
					<div class="np-content">
					<?php
						//et_divi_post_meta();

						if ( 'on' !== et_get_option( 'divi_blog_style', 'false' ) || ( is_search() && ( 'on' === get_post_meta( get_the_ID(), '_et_pb_use_builder', true ) ) ) ) {
							truncate_post( 270 );
						} else {
							the_content();
						}
						echo '<br/><a href="' . get_the_permalink() . '" class="np-continue">read more</a>';
					?>
					</div>

					</article> <!-- .et_pb_post -->
			<?php
					endwhile;

					if ( function_exists( 'wp_pagenavi' ) )
						wp_pagenavi();
					else
						get_template_part( 'includes/navigation', 'index' );
				else :
					get_template_part( 'includes/no-results', 'index' );
				endif;
			?>

		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer(); ?>