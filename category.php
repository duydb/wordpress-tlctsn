<?php get_header(); ?>
<div class="enigma_header_breadcrum_title">	
	<div class="container">
		<div class="row">
		<?php if(have_posts()) :?>
			<div class="col-md-12">
			<h1><?php printf( __( '%s', 'enigma' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
			</div>
		<?php endif; ?>	
		</div>
	</div>	
</div>
<div class="container">	
	<div class="row">
	<div class="col-md-8 pull-left">
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
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<?php the_excerpt( __( 'Read More' , 'enigma' ) ); ?>
		</div>
	</div>
	<?php endwhile; 
	endif; 
	weblizar_navigation(); ?>
	</div>	
	<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer(); ?>
<?php 



		
	// while (have_post() ): the_post();
	// get_template_pảt('post','content'); ?>	
	 <?php //endwhile; ?>

?>