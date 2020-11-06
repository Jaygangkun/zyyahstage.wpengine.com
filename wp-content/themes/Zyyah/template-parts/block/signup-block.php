<?php /* Block Name: Signup Block */ ?>

<section class="signup-block">
	<div class="container">
		<h2 class="block-title--small text-center"><?php the_field('title')?></h2>
		<div class="form-container">
		<?php echo do_shortcode('[gravityform id="'.get_field('form_id').'" ajax="true" title="false" description="false"]');?>
		</div>
	</div>
</section>