<div class="accordion-container">
<?php 
$loop = new WP_Query( array( 'post_type' => 'press', 'order' => 'ASC' ) );
    if ( $loop->have_posts() ) :
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
						
						<div class="faq-container">
						
							<h3 class="question">
							
							<!-- post details -->
							<span class="date"><?php the_time('F j, Y'); ?></span><span class="vert-rule">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;</span>
							<!-- /post details -->
							
							<?php the_title(); ?>
							
							<!-- arrow icon -->
							<span class="icon-container"><i class="fa fa-chevron-down"></i></span>
							<!-- /arrow icon -->
							
							</h3>
							<div class="answer clearfix">
								<?php the_content(); ?>
							</div>
							
						</div>
						
				<?php endwhile; 
		endif; 
wp_reset_postdata(); ?>
</div>