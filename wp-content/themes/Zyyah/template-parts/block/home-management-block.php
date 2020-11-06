<?php /* Block Name: Home Management Block */ ?>

<section class="home-management-block">
	<div class="container--large">
		<h2 class="block-title"><?php the_field('title')?></h2>
		<div class="row home-management-item-list">
		<?php if( have_rows('list') ): while ( have_rows('list') ) : the_row(); ?>
			<div class="col-lg-4 home-management-item-col">
				<?php
				$icon = get_sub_field('icon');
				if($icon){
					?>
					<img class="home-management-item__img" src="<?php echo $icon['url']?>" alt="<?php echo $icon['alt']?>">
					<?php
				}
				?>

				<div class="item-title"><?php the_sub_field('title')?></div>
				<div class="block-desc"><?php the_sub_field('description')?></div>
			</div>
		<?php endwhile; endif; ?>
		</div>
	</div>
</section>