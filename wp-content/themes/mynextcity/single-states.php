<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 class="fade-in-up-1"><?the_title()?></h1>

<div class="row" data-equalizer>
	<? 
	$args = array( 'post_type' => 'cities', 'posts_per_page' => 3, 'category_name' => 'perspectives', 'order' => 'DEC', 'offset' => '0');
	$my_query = new WP_Query($args); if($my_query->have_posts()) : while ($my_query->have_posts()) : $my_query->the_post(); 
	?>


	<div class="large-4 medium-4 columns" data-equalizer-watch>
		<h4><a href="<? echo get_permalink(); ?>"><? the_title(); ?></a></h4>
		<ul class="job-details">
			<li><i class="fa fa-map-marker" aria-hidden="true"></i> <?php the_field('job_location'); ?></li>
			<li><i class="fa fa-clock-o" aria-hidden="true"></i> <?php the_field('time'); ?></li>
			<li><i class="fa fa-graduation-cap" aria-hidden="true"></i> <?php the_field('experience_level'); ?></li>
		</ul>
		<p><?php the_field('description'); ?> <a class="nobr" href="<? echo get_permalink(); ?>">Learn more and apply</a></p>

	</div>

<? endwhile; ?>   
<?php else : ?>

	<div class="large-10 columns">
		<p>There are currently no open positions. Please feel free to <a href="mailto:careers@jajo.agency">contact us</a> and we will notify you when we post new openings.</p> 
	</div>

<?php endif; ?>

</div>


<?php endwhile; else: ?>
	<div class="container">
		<div class="row">
			<div class="medium-12 columns 404"> <img src="<?echo $t?>img/404.png" alt="">
				<p>Sorry, no posts matched your criteria.</p>
			</div>
		</div>
	</div>
<?php endif; ?>


<?php get_footer(); ?>
