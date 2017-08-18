<?php /* Template Name: Archive States Template */ get_header(); ?>

<?php
// WP_Query arguments

	//* The Query
	$exec_query = new WP_Query( array (
		'post_type' => 'states',
		'posts_per_page' => 50,
		'order' => 'ASC',
		'orderby' => 'title'
	) );

	//* The Loop
	if ( $exec_query->have_posts() ) { ?>

		<h3 class="title">Test</h3>

		<ul> <?php

			while ( $exec_query->have_posts() ): $exec_query->the_post(); ?>

			<li>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
			</li> <?php

			endwhile; ?>

		</ul>
<?php
	//* Restore original Post Data
	wp_reset_postdata();
}?>



<?php get_footer(); ?>
