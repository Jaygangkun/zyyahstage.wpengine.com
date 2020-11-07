<?php /* Block Name: How We Work List Block */ ?>

<section class="how-we-work-list-block" style="background-color:<?php the_field('background_color')?>">
	<div class="container--large">
		<div class="row">
			<div class="col-lg-7 mx-auto">
				<h2 class="block-title--small"><?php the_field('title')?></h2>
				<div class="block-desc"><?php the_field('description')?></div>
			</div>
		</div>
		<div class="row how-we-work-list-row">
		<?php if( have_rows('list') ): while ( have_rows('list') ) : the_row(); ?>
			<div class="col-lg-6 how-we-work-list-col">
				<?php
				$icon = get_sub_field('icon');
				if($icon){
					?>
					<img class="how-we-work-list-item__img" src="<?php echo $icon['url']?>" alt="<?php echo $icon['alt']?>">
					<?php
				}
				?>
				<div class="item-title"><?php the_sub_field('title')?></div>
				<div class="block-desc">
					<div class="block-desc--b"><?php the_sub_field('sub_title')?></div>
					<div class=""><?php the_sub_field('description')?></div>
				</div>
			</div>
		<?php endwhile; endif; ?>
		</div><!-- end .row -->
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
	</div><!-- end .container -->
</section>