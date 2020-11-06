<?php /* Block Name: Home One Place Block */ ?>

<section class="home-one-place-block">
	<div class="home-one-place-block-top">
		<div class="home-once-place-block-top-left">
			<div class="home-one-place-block-content-wrap">
				<h2 class="block-title--small"><?php the_field('title1')?></h2>
				<div class="block-desc"><?php the_field('description1')?></div>
			</div>
		</div>
		<?php
		$img = get_field('image');
		$img_url = '';
		if($img){
			$img_url = $img['url'];
		}
		?>
		<div class="home-once-place-block-top-right block--bk" style="background-image:url(<?php echo $img_url?>)">
		</div>
	</div>
	<div class="home-one-place-block-bottom">
		<div class="home-one-place-block-content-wrap">
			<h2 class="block-title--small"><?php the_field('title2')?></h2>
			<div class="block-desc"><?php the_field('description2')?></div>
			<?php
			$link = get_field('link');
			if($link){
				?>
				<div class="link-wrap">
					<a class="link link--purple" href="<?php echo $link['url']?>" target="<?php echo $link['target']?>"><?php echo $link['title']?></a>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<div class="home-one-place-block-frame">
		<div class="home-one-place-block-frame-rect"></div>
		<img class="home-one-place-block-frame-img" src="<?php echo get_template_directory_uri()?>/library/images/phone.png" alt="Phone Image">
	</div>
	<div class="container--large">
		<div class="home-one-place-block-border-bottom"></div>
	</div>
</section>