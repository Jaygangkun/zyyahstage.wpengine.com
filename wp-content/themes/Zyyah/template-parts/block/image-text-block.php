<?php /* Block Name: Image Text Block */ ?>
<?php
$bk = get_field('background_image');
$bk_src = '';
if($bk){
	$bk_src = $bk['url'];
}
?>
<section class="image-text-block block--bk" style="background-image: url(<?php echo $bk_src?>)">
	<div class="container--large">
		<div class="row">
			<div class="col-lg-12 mx-auto">
				<h2 class="block-title"><?php the_field('title')?></h2>
				<div class="home-desc"><?php the_field('description')?></div>
			</div>
		</div>
	</div>
</section>