<?php /* Block Name: About Hero Block */ ?>

<section class="about-hero-block">
	<div class="about-hero-back">
		<div class="about-hero-back-left"></div>
		<?php
		$img = get_field('background_image');
		$img_url = '';
		if($img){
			$img_url = $img['url'];
		}
		?>
		<div class="about-hero-back-img block--bk" style="background-image:url(<?php echo $img_url?>)"></div>
	</div>
	<div class="container--large">
		<div class="about-hero-title-container">
			<div class="about-hero-title-wrap">
				<h1 class="block-title"><?php the_field('title')?></h1>
				<div class="about-hero-title-rect"></div>
			</div>
		</div>
	</div>
</section>