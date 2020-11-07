<?php /* Block Name: How We Work Professionals Block */ ?>

<section class="how-we-work-professionals-block" style="background-color:<?php the_field('background_color')?>">
	<div class="container--large">
		<div class="how-we-work-professionals-top-title-wrap">
			<div class="how-we-work-professionals-top-title__line"></div>
			<h3 class="how-we-work-professionals-top-title"><?php the_field('top_title')?></h3>
			<div class="how-we-work-professionals-top-title__line"></div>
		</div>
		<div class="how-we-work-professionals-main how-we-work-professionals-main--img-align-<?php the_field('image_align')?>">
			<div class="how-we-work-professionals-content">
				<h2 class="block-title--small"><?php the_field('title')?></h2>
				<div class="block-desc"><?php the_field('description')?></div>
				<div class="how-we-work-professionals-rect"></div>
			</div>
			<?php
			$img = get_field('image');
			$img_url = '';
			if($img){
				$img_url = $img['url'];
			}
			?>
			<div class="how-we-work-professionals-image block--bk" style="background-image: url(<?php echo $img_url?>)">
			</div>
		</div>
	</div>
</section>