<?php get_header(); ?>

<?php get_template_part('partials/secondary-page-title'); ?>

<section class="content container clearfix">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<?php if ( has_post_thumbnail() ) { ?>

			<div class="feat-image left" style="background-image: url(<?php feat_image(); ?>);"></div>

		<?php } ?>
			
		<h1 class="post-title"><?php the_title(); ?></h1>

		<?php the_content(); ?>

		<?php if ( get_field('hide_blog_cta') == false ) {

			get_template_part('partials/blog-cta');

		} ?>

	<?php endwhile; endif; ?>

</section><!-- end content -->

<?php get_footer(); ?>