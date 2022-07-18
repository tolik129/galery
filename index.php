<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>

<div class="container">

<?php if (have_rows('Cart')) : ?>
	<?php while (have_rows('Cart')) : the_row(); ?>
		<?php
		$img = get_sub_field('img');
		$title =  get_sub_field('title');
		$description =  get_sub_field('description');
		$icon =  get_sub_field('icon');
		
		?>

	<a href="#" class="button">
		<img src="<?= $img ?>" alt="">
       <div class="wraper">
       	  <div class="wraper__item ">
       	  	<h3><?= $title ?>asad</h3>
       	  	<p><?= $description ?></p>
       	  </div>
       	  <div class="wraper__item icon">
       	  	<img src="<?= $icon ?>" alt="">
       	  </div>
       </div>
	</a>
    	<?php endwhile; ?>
<?php endif; ?> 


	
</div>	





<?php

get_footer();
