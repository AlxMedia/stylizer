<?php get_header(); ?>

<div class="content">
		
	<?php get_template_part('inc/page-title'); ?>
			
	<?php if ( ! is_paged() ) : ?>
		<?php the_archive_description( '<div class="pad pad-top group"><div class="notebox">', '</div></div>' ); ?>
	<?php endif; ?>
	
	<?php if ( have_posts() ) : ?>
			
		<?php if ( get_theme_mod('blog-layout','blog-list') == 'blog-list' ) : ?>
			
			<?php while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content-list'); ?>
			<?php endwhile; ?>
			
		<?php else: ?>
		
			<?php while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
			<?php endwhile; ?>
			
		<?php endif; ?>
		
		<?php get_template_part('inc/pagination'); ?>
		
	<?php endif; ?>

</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>