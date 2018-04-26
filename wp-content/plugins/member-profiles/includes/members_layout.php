<ul class="profile">
	<?php
		$args = array('post_type' => 'nominees', 'posts_per_page' =>-1 );
		$loop = new WP_Query($args);
		if ( $loop->have_posts() ) : while ( $loop->have_posts() ) : $loop->the_post();
	?>
	<li>
  	<span class="profile-container read-bio">
    	<a href="javascript:void(0)">
    		<?php if ( has_post_thumbnail() ) {
    	 			    the_post_thumbnail();
    	 	} else { ?>
    	 	<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/male-placeholder.jpg" alt="<?php the_title(); ?>" /> 
    	 	<?php } ?>
    	 	
    	 	<div class="read-bio-flash">Read Bio</div>
	    </a>
		</span>
    <p class="name-tag"><?php the_title(); ?></p>
    <p class="title-tag"><?php the_field('staff_title'); ?></p>
    <div class="panel">
    	<i class="fa fa-close"></i>
    	<h3><?php the_title(); ?></h3>
    	<h4><?php the_field('staff_title'); ?></h4>
    	<?php the_content(); ?>
    </div>
   </li>
   <?php endwhile; endif; wp_reset_query(); ?>
</ul>