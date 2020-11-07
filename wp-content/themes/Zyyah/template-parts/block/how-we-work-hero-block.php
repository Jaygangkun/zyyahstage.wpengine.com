<?php /* Block Name: How We Work Hero Block */ ?>

<section class="how-we-work-hero-block">
	<?php
	$img = get_field('image');
	$img_url = '';
	if($img){
		$img_url = $img['url'];
	}
	?>
	<div class="how-we-work-hero-top block--bk" style="background-image:url(<?php echo $img_url?>)"></div>
	<div class="how-we-work-hero-bottom">
		<div class="container--large">
			<div class="how-we-work-hero-content">
				<div class="how-we-work-hero-content-wrap">
					<h1 class="block-title"><?php the_field('title')?></h1>
					<div class="block-desc"><?php the_field('description')?></div>
					<div class="how-we-work-hero-rect"></div>
				</div>
				<div class="how-we-work-hero-img-wrap">
					<img class="how-we-work-hero__img" src="<?php echo get_template_directory_uri()?>/library/images/phone.png" alt="Phone Image">
				</div>
			</div>
		</div>
	</div>
</section>