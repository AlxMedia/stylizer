<?php get_header(); ?>

<div class="content">
	
	<?php get_template_part('inc/page-title'); ?>
	
	<div class="pad pad-top group">	
		<div class="notebox">
			<?php esc_html_e('For the term','stylizer'); ?> "<span><?php echo get_search_query(); ?></span>".
			<?php if ( !have_posts() ): ?>
				<?php esc_html_e('Please try another search:','stylizer'); ?>
			<?php endif; ?>
			<div class="search-again">
				<?php get_search_form(); ?>
			</div>
		</div>	
	</div><!--/.pad-->
	
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