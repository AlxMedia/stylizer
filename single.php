<?php get_header(); ?>

<div class="content">
	<div class="pad group">
		
		<?php while ( have_posts() ): the_post(); ?>
			<article <?php post_class(); ?>>
			
				<div class="post-details">
				
					<?php if ( get_theme_mod( 'author-avatar', 'on' ) =='on' ): ?>
						<div class="post-details-thumb">
							<a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'200'); ?></a>
						</div><!--/.post-details-thumb-->
					<?php endif; ?>

					<div class="post-details-day"><?php the_time( 'd' ); ?></div>
					<div class="post-details-month"><?php the_time( 'M' ); ?></div>
					<div class="post-details-year"><?php the_time( 'Y' ); ?></div>
				</div>
				
				<h1 class="post-title"><?php the_title(); ?></h1>
				
				<ul class="post-meta group">
					<li class="post-author"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?></li>
					<li class="post-category"><i class="fas fa-folder"></i> <?php the_category(', '); ?></li>
					<li class="post-comment"><i class="fas fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></li>
				</ul><!--/.post-meta-->
				
				<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
				
				<div class="clear"></div>
				
				<div class="entry">	
					<?php the_content(); ?>
					<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','stylizer'),'after'=>'</div>')); ?>
					<div class="clear"></div>				
				</div><!--/.entry-->
				
			</article><!--/.post-->				
		<?php endwhile; ?>
		
		<div class="clear"></div>
		
		<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','stylizer').'</span> ','','</p>'); ?>
		
		<?php do_action( 'alx_ext_sharrre' ); ?>
		
		<div class="clear"></div>
		
		<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
			<div class="author-bio">
				<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
				<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
				<p class="bio-desc"><?php the_author_meta('description'); ?></p>
				<div class="clear"></div>
			</div>
		<?php endif; ?>
		
		<?php if ( get_theme_mod( 'post-nav', 's1' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
		
		<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
		
		<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
		
	</div><!--/.pad-->
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>