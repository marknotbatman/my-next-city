<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<h1 class="fade-in-up-1"><?the_title()?></h1>

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
