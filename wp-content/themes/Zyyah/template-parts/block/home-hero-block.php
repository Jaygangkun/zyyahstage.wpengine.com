<?php /* Block Name: Home Hero Block */ ?>

<section class="home-hero-block">
	<?php
	$bk = get_field('top_background');
	$bk_url = '';
	if($bk){
		$bk_url = $bk['url'];
	}
	?>
	<div class="home-hero-block-top block--bk" style="background-image:url(<?php echo $bk_url?>)">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 mx-auto text-center">
					<div class="home-block-content-wrap">
						<h1 class="block-title"><?php the_field('title')?></h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	$bk = get_field('bottom_background');
	$bk_url = '';
	if($bk){
		$bk_url = $bk['url'];
	}
	?>
	<div class="home-hero-block-bottom block--bk" style="background-image:url(<?php echo $bk_url?>)">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 mx-auto text-center">
					<div class="home-block-content-wrap">
						<div class="home-desc"><?php the_field('description')?></div>
						<?php
						$link = get_field('link');
						if($link){
							?>
							<div class="home-link-wrap">
								<a class="link link--black" src="<?php echo $link['url']?>" target="<?php echo $link['target']?>"><?php echo $link['title']?></a>
							</div>
							<?php
						}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>