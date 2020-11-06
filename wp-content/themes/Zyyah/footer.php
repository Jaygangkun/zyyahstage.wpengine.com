			<footer class="footer text-center" role="contentinfo">
			
				<div class="container">
					<div class="row">
						<div class="col-lg-3">
							<div class="footer-col-wrap">
								<?php
								$footer_logo = get_field('footer_logo', 'option');
								if($footer_logo){
									?>
									<a class="footer-logo-link" href="<?php echo home_url(); ?>">
										<img class="footer-logo__img" src="<?php echo $footer_logo['url']?>" alt="<?php echo $footer_logo['alt']?>">
									</a>
									<?php
								}
								?>
								<div class="footer-text-right footer--desktop"><?php the_field('footer_rights_text', 'option')?></div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="footer-col-wrap">
								<div class="footer-contact-wrap footer--desktop">
									<div class="footer-contact-row">
										<div class="footer-contact-title"><?php the_field('call_us_text1', 'option')?></div>
										<div class="footer-contact-value">
											<span class="footer-contact-text2"><?php the_field('call_us_text2', 'option')?></span>
											<a class="footer-phone-link" href="tel:<?php the_field('call_us_text3', 'option')?>"><?php the_field('call_us_text3', 'option')?></a>
										</div>
									</div>
									<div class="footer-contact-row">
										<div class="footer-contact-title"><?php the_field('email_us_text1', 'option')?></div>
										<div class="footer-contact-value">
											<span class="footer-contact-text2"><?php the_field('email_us_text2', 'option')?></span>
											<a class="footer-email-link" href="mailto:<?php the_field('email_us_text3', 'option')?>"><?php the_field('email_us_text3', 'option')?></a>
										</div>
									</div>
									<div class="footer-contact-row">
										<div class="footer-contact-title"><?php the_field('visit_us_text1', 'option')?></div>
										<div class="footer-contact-value">
											<?php the_field('visit_us_text2', 'option')?>
										</div>
									</div>
								</div>
								<div class="footer-contact-wrap footer--mobile">
									<div class="footer-contact-row">
										<img class="footer-contact__img" src="<?php echo get_template_directory_uri()?>/library/images/icon-phone.svg" alt="Phone Icon">
										<div class="footer-contact-info">
											<span class="footer-contact-title"><?php the_field('call_us_text1', 'option')?></span>
											<a class="footer-phone-link" href="tel:<?php the_field('call_us_text3', 'option')?>"><?php the_field('call_us_text3', 'option')?></a>
										</div>
									</div>
									<div class="footer-contact-row">
										<img class="footer-contact__img" src="<?php echo get_template_directory_uri()?>/library/images/icon-email.svg" alt="Email Icon">
										<div class="footer-contact-info">
											<span class="footer-contact-title"><?php the_field('email_us_text1', 'option')?></span>
											<a class="footer-phone-link" href="tel:<?php the_field('email_us_text3', 'option')?>"><?php the_field('email_us_text3', 'option')?></a>
										</div>
									</div>
									<div class="footer-contact-row">
										<img class="footer-contact__img" src="<?php echo get_template_directory_uri()?>/library/images/icon-location.svg" alt="Location Icon">
										<div class="footer-contact-info">
											<span class="footer-contact-title"><?php the_field('visit_us_text1', 'option')?></span>
											<div class="footer-contact-value" href="tel:<?php the_field('visit_us_text2', 'option')?>"><?php the_field('visit_us_text2', 'option')?></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5">
							<div class="footer-col-wrap footer-col-wrap--links">
								<div class="footer-link-wrap">
									<?php primer_footer_links() ?>
								</div>
								<div class="footer-social-links">
									<?php
									$facebook_link = get_field('facebook_link', 'option');
									if($facebook_link){
										?>
										<a class="footer-social-link" href="<?php echo $facebook_link['url']?>" target="_blank">
											<img class="footer-social-link__img" src="<?php echo get_template_directory_uri()?>/library/images/icon-facebook.svg" alt="Facebook Icon">
										</a>
										<?php
									}
									?>
									<?php
									$linkedin_link = get_field('linkedin_link', 'option');
									if($linkedin_link){
										?>
										<a class="footer-social-link" href="<?php echo $linkedin_link['url']?>" target="_blank">
											<img class="footer-social-link__img" src="<?php echo get_template_directory_uri()?>/library/images/icon-linkedin.svg" alt="Linkedin Icon">
										</a>
										<?php
									}
									?>
								</div>
								<div class="footer-text-right footer--mobile"><?php the_field('footer_rights_text', 'option')?></div>
							</div>
						</div>
					</div>
				</div>
				
			</footer> <!-- end footer -->
		
		</div> <!-- end #container -->
		
		<!-- all js scripts are loaded in library/primer.php -->
		<?php wp_footer(); ?>
		
		<!-- Bootstrap JS -->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	</body>

</html> <!-- end page. what a ride! -->
