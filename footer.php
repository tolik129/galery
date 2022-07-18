<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test
 */

?>

	



<?php if (have_rows('okno')) : ?>
	<?php 
		
		  $i=0;
	     while (have_rows('okno')) : the_row(); {
		$title = get_sub_field('title');
		$title_2 =  get_sub_field('title_2');
		$decsript = get_sub_field('decsript');
		
		?>
	<div class="overlay-<?php echo $i; ?>">
		<div class="popup">
			<div class="galery">
				<div class="slider slider-for">


	          <?php if (have_rows('img')) : ?>
	            <?php while (have_rows('img')) : the_row(); ?>
					<?php
						$icon_url = get_sub_field('icon');
					?>
				<div>
						<img src="<?= $icon_url ?>" alt="" >
				</div>
		      <?php endwhile; ?>
             <?php endif; ?>
				
			</div>
			<div class="slider slider-nav">
				
				 <?php if (have_rows('img')) : ?>
	            <?php while (have_rows('img')) : the_row(); ?>
					<?php
						$icon_url = get_sub_field('icon');
					?>
				<div>
						<img src="<?= $icon_url ?>" alt="" >
				</div>
		      <?php endwhile; ?>
             <?php endif; ?>
			</div>
			</div>
			<div class="content">
				<h2> <?= $title ?>
					<span><?= $title_2 ?></span>
				</h2>
				<h5> <?= $decsript ?></h5>
				<ul>
                <?php if (have_rows('list')) : ?>
  		        <?php while (have_rows('list')) : the_row(); ?>
	  				<?php
					   $title = get_sub_field('title');			
					?>
					<li><?= $title ?></li>
					  <?php endwhile; ?>
					  <?php endif; ?>
				</ul>
			</div>
			<div class="close-popup"></div>
		</div>
	</div>
<?php  $i=$i+1; } endwhile; ?>
     <?php endif; ?> 
	






<?php wp_footer(); ?>
<script>
	 $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});
</script>
<script>
$(document).ready(function(){
			// Вызов модального окна
		$('.item-0').click( function() {
			$('.overlay-0').fadeIn();
		});

		// Закрытие окна на крестик
		$('.close-popup').click( function() {
			$('.overlay-0').fadeOut();
		});

		// Закрытие окна на поле
		$(document).mouseup( function (e) { 
			var popup = $('.popup');
			if (e.target != popup[0] && popup.has(e.target).length === 0){
				$('.overlay-0').fadeOut();
			}
		});
});
</script>

<script>
$(document).ready(function(){
			// Вызов модального окна
		$('.item-1').click( function() {
			$('.overlay-1').fadeIn();
		});

		// Закрытие окна на крестик
		$('.close-popup').click( function() {
			$('.overlay-1').fadeOut();
		});

		// Закрытие окна на поле
		$(document).mouseup( function (e) { 
			var popup = $('.popup');
			if (e.target != popup[0] && popup.has(e.target).length === 0){
				$('.overlay-1').fadeOut();
			}
		});
});
</script>

<script>
$(document).ready(function(){
			// Вызов модального окна
		$('.item-2').click( function() {
			$('.overlay-2').fadeIn();
		});

		// Закрытие окна на крестик
		$('.close-popup').click( function() {
			$('.overlay-2').fadeOut();
		});

		// Закрытие окна на поле
		$(document).mouseup( function (e) { 
			var popup = $('.popup');
			if (e.target != popup[0] && popup.has(e.target).length === 0){
				$('.overlay-2').fadeOut();
			}
		});
});
</script>
<script>
$(document).ready(function(){
			// Вызов модального окна
		$('.item-3').click( function() {
			$('.overlay-3').fadeIn();
		});

		// Закрытие окна на крестик
		$('.close-popup').click( function() {
			$('.overlay-3').fadeOut();
		});

		// Закрытие окна на поле
		$(document).mouseup( function (e) { 
			var popup = $('.popup');
			if (e.target != popup[0] && popup.has(e.target).length === 0){
				$('.overlay-3').fadeOut();
			}
		});
});
</script>
<script>
$(document).ready(function(){
			// Вызов модального окна
		$('.item-4').click( function() {
			$('.overlay-4').fadeIn();
		});

		// Закрытие окна на крестик
		$('.close-popup').click( function() {
			$('.overlay-4').fadeOut();
		});

		// Закрытие окна на поле
		$(document).mouseup( function (e) { 
			var popup = $('.popup');
			if (e.target != popup[0] && popup.has(e.target).length === 0){
				$('.overlay-4').fadeOut();
			}
		});
});
</script>
<script>
$(document).ready(function(){
			// Вызов модального окна
		$('.item-5').click( function() {
			$('.overlay-5').fadeIn();
		});

		// Закрытие окна на крестик
		$('.close-popup').click( function() {
			$('.overlay-5').fadeOut();
		});

		// Закрытие окна на поле
		$(document).mouseup( function (e) { 
			var popup = $('.popup');
			if (e.target != popup[0] && popup.has(e.target).length === 0){
				$('.overlay-5').fadeOut();
			}
		});
});
</script>
</body>
</html>
