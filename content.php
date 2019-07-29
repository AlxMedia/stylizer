<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('group post-standard'); ?>>	
	
	<div class="post-details">
		<?php if ( has_post_thumbnail() ): ?>
			<div class="post-details-thumb">
				<a href="<?php the_permalink(); ?>">
					<?php the_post_thumbnail('stylizer-small'); ?>
					<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
					<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
					<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
				</a>
			</div><!--/.post-details-thumb-->
		<?php else: ?>
	
		<?php endif; ?>
		<div class="post-details-day"><?php the_time( 'd' ); ?></div>
		<div class="post-details-month"><?php the_time( 'M' ); ?></div>
		<div class="post-details-year"><?php the_time( 'Y' ); ?></div>
	</div>
	
	<div class="post-content">
		
		<h2 class="post-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2><!--/.post-title-->
		
		<ul class="post-meta group">
			<li class="post-author"><i class="fas fa-user"></i> <?php the_author_posts_link(); ?></li>
			<li class="post-category"><i class="fas fa-folder"></i> <?php the_category(', '); ?></li>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count','on' ) == 'on' ) ): ?>
				<li class="post-comment"><i class="fas fa-comment"></i> <a href="<?php comments_link(); ?>"><?php comments_number( '0', '1', '%' ); ?></a></li>
			<?php endif; ?>
		</ul><!--/.post-meta-->
		
		<?php get_template_part('inc/post-formats'); ?>

		<div class="entry">
			<?php 
				if ( is_search() ) { the_excerpt(); } 
				else the_content(esc_html__('Continue reading...','stylizer'));
			?>
		</div><!--/.entry-->
		
		<?php if ( get_theme_mod( 'format-icon', 'on' ) =='on' ): ?>
			<div class="format-circle"><a href="<?php echo get_post_format_link($format); ?>"><i class="fa"></i></a></div>
		<?php endif; ?>

	</div><!--/.post-content-->

</article><!--/.post-->	