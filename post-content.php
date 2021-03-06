<div id="post-<?php the_ID(); ?>" <?php post_class('enigma_blog_full'); ?>>
	<!-- <ul class="blog-date-left">
		<li class="enigma_post_date">
		<?php if ( ('d M  y') == get_option( 'date_format' ) ) : ?>
		<span class="date"><?php echo get_the_date('d'); ?></span><h6><?php echo get_the_date('M  y'); ?></h6>
		<?php else : ?>
		<span class="date"><?php echo get_the_date(); ?></span>
		<?php endif; ?>
		</li>
		<li class="enigma_post_author"><?php echo get_avatar(get_the_author_meta( 'ID' ),96); ?></li>
		<li class="enigma_blog_comment"><i class="fa fa-comments-o"></i><h6><?php comments_popup_link( '0', '1', '%', '', '-'); ?></h6></li>
	</ul> -->
	<div class="post-content-wrap">
		<?php if(has_post_thumbnail()): 
		$img = array('class' => 'enigma_img_responsive'); ?>
		<div class="col-md-12 nopadding">						
			<div class="enigma_blog-img">
			<?php the_post_thumbnail('blog_2c_thumb',$img); ?>						
			</div>
			<?php if (is_home()) : ?>
			<div class="enigma_blog_thumb_wrapper_showcase_overlay">
			<div class="enigma_blog_thumb_wrapper_showcase_overlay_inner ">
				<div class="enigma_blog_thumb_wrapper_showcase_icons">
					<a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a>
				</div>
			</div>
			</div>
			<?php endif; ?>
		</div>
		<?php endif; ?>
		<div class="enigma_fuul_blog_detail_padding">
		
		<?php the_content( __( 'Read More' , 'enigma' ) ); 
		$defaults = array(
              'before'           => '<div class="enigma_blog_pagination"><div class="enigma_blog_pagi">' . __( 'Pages:','enigma'  ),
              'after'            => '</div></div>',
	          'link_before'      => '',
	          'link_after'       => '',
	          'next_or_number'   => 'number',
	          'separator'        => ' ',
	          'nextpagelink'     => __( 'Next page'  ,'enigma' ),
	          'previouspagelink' => __( 'Previous page' ,'enigma'),
	          'pagelink'         => '%',
	          'echo'             => 1
	          );
	          wp_link_pages( $defaults ); ?>
		</div>
	</div>
</div>
<div class="row">
<?php if(get_the_category_list() != '') { ?>
<p class="enigma_cats"><?php echo __("Chuyên mục ",'enigma');
the_category(' '); ?></p>
<?php } ?>
</div>
<div class="row">
<?php if(get_the_tag_list() != '') { ?>
<p class="enigma_tags"><?php the_tags( __('Từ khóa : ','enigma'), ' ', '<br />'); ?></p>
<?php } ?>
</div>
<div class="push-right">
<hr class="blog-sep header-sep">
</div>