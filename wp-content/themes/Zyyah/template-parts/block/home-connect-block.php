<?php /* Block Name: Home Connect Block */ ?>

<section class="home-connect-block">
	<div class="container container--large-767">
		<h2  class="block-title--small"><?php the_field('title')?></h2>
		<div class="row d-flex justify-content-between home-connect-list">
			<?php if( have_rows('list') ): while ( have_rows('list') ) : the_row(); ?>
			<div class="col-lg-5 home-connect-item-col">
				<?php
				$icon = get_sub_field('icon');
				if($icon){
					?>
					<img class="home-connect-item__img" src="<?php echo $icon['url']?>" alt="<?php echo $icon['alt']?>">
					<?php
				}
				?>
				<div class="item-title"><?php the_sub_field('title')?></div>
				<div class="block-desc">
					<div class="block-desc--b"><?php the_sub_field('sub_title')?></div>
					<div class=""><?php the_sub_field('description')?></div>
				</div>
				<?php
				$link = get_sub_field('link');
				if($link){
					?>
					<div class="home-connect-link-wrap">
						<a class="link link--purple-outline" href="<?php echo $link['url']?>" target="<?php echo $link['target']?>"><?php echo $link['title']?></a>
					</div>
					<?php
				}
				?>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>