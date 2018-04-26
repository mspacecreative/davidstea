<div class="accordion-container">
<?php 
$loop = new WP_Query( array( 'post_type' => 'faqs', 'order' => 'ASC' ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<div class="faq-container">
							<h3 class="question"><?php the_title(); ?><span class="icon-container"><i class="fa fa-chevron-down"></i></span></h3>
							<div class="answer clearfix">
								<?php the_content(); ?>
							</div>
							
						</div>
						
				<?php endwhile; 
		endif; 
wp_reset_postdata(); ?>
</div>