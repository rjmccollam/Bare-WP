<?php get_header(); ?>

	<div id="content" class="left">

		<div class="main">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<?php the_content(); ?>

			<?php endwhile; endif; ?>

			<div class="clear"></div>

		</div>

	</div><!-- end content -->

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
