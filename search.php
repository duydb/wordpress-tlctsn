<?php get_header(); ?>
<div class="enigma_header_breadcrum_title">	
	<div class="container">
		<div class="row">
		<?php if(have_posts()) :?>
			<div class="col-md-12">
			<h1><?php printf( __( 'Kết quả tìm kiếm: %s', 'enigma' ), '<span>' . get_search_query() . '</span>'  ); ?>
			</h1>
			</div>
		<?php endif; ?>
		<?php rewind_posts(); ?>
		</div>
	</div>	
</div>
<div class="container">	
	<div class="row enigma_blog_wrapper">
	<div class="col-md-8">
	<?php 
	if ( have_posts()): 
	while ( have_posts() ): the_post(); ?>
	<div class="article-feature">
		<div class="cover">
			<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
			<?php $img = array('class' => 'enigma_img_responsive');
				if(has_post_thumbnail()): 
				the_post_thumbnail('home_post_thumb',$img);
			endif;?>
			</a>
		</div>
		<div class="content">
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
			<?php the_excerpt( __( 'Read More' , 'enigma' ) ); ?>
		</div>
	</div>
	<?php endwhile; 
	weblizar_navigation();
	else :
	get_template_part('nocontent');
	endif; ?>	 
	</div>	
	<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>