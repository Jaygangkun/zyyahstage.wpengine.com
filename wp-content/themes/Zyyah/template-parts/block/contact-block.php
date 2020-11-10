<?php /* Block Name: Contact Block */ ?>

<section class="contact-block">
	<div class="container">
		<h1 class="block-title"><?php the_field('title')?></h1>
		<div class="home-desc"><?php the_field('description')?></div>
		<div class="row">
			<div class="col-lg-8">
				<div class="contact-form-container">
					<div class="contact-form-title"><?php the_field('form_title')?></div>
					<div class="conact-form-wrap">
					<?php echo do_shortcode('[gravityform id="'.get_field('form_id').'" ajax="true" title="false" description="false"]');?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>