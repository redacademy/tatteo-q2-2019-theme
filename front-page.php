<?php
/**
 * The template for displaying Front Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Tatteo
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', 'hero');
			if (is_user_logged_in()) :
				get_template_part('template-parts/content', 'front-page');
			endif;


		/* If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;*/

		endwhile; // End of the loop.
		?>






	</main><!-- #main -->
</div><!-- #primary -->


<?php
get_footer();
