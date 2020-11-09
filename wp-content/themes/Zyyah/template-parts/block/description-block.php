<?php /* Block Name: Description Block */ ?>

<section class="description-block">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 mx-auto">
				<div class="description-text1"><?php the_field('description1')?></div>
				<div class="description-text2"><?php the_field('description2')?></div>
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
	</div>
</section>