<div class="landing-page">
	<div class="gradient-top-color">
		<header class="top-line top-line-text">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="bloc bloc-editor"><?php wplp_editable_text('free1_logo', 'Your Logo'); ?></div>
					</div>
					<div class="col-md-9">
						<div class="bloc bloc-menu">
							<?php wplp_editable_menu('free1_menu_1'); ?>
						</div>
					</div>
				</div>
			</div>
		</header>

		<section class="header-content header-content-btn-cta2 header-content-text">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="bloc bloc-editor">
							<?php wplp_editable_text('free1_text_1', '<h1>Page Title</h1><p>Here your content or place a shortcode to display a contact fomulaire or otherwise.</p><button type="submit">Call To Action</button>'); ?>
						</div>
					</div>

					<div class="col-md-7">
						<div class="bloc bloc-editor">
							<?php wplp_editable_text('free1_text_2', '<img src="'.plugins_url( 'images/smartphone.png', dirname(dirname(__FILE__))).'">'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>

	</div>

	<section class="presentation top-line top-line-text top-line-bg">
		<div class="container">
			<div class="bloc bloc-editor"><?php wplp_editable_text('free1_text_presentation', 'Place here your text of presentation.'); ?></div>
		</div>
	</section>

	<section class="benefits benefits-bg benefits-text">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="bloc bloc-editor"><?php wplp_editable_text('free1_text_benefits1', 'Content of benefits first section.'); ?></div>
				</div>
				<div class="col-md-4">
					<div class="bloc bloc-editor"><?php wplp_editable_text('free1_text_benefits2', 'Content of benefits second section.'); ?></div>
				</div>
				<div class="col-md-4">
					<div class="bloc bloc-editor"><?php wplp_editable_text('free1_text_benefits3', 'Content of benefits third section.'); ?></div>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonial benefits-bg benefits-text">
		<div class="container">
			<div class="bloc bloc-editor"><?php wplp_editable_text('free1_text_testimonial', 'Content of testimonial.'); ?></div>
		</div>
	</section>

	<footer class="footer header-content-bg header-content-text">
		<div class="container">
			<div class="bloc bloc-editor"><?php wplp_editable_text('free1_text_footer', 'Content of footer.'); ?></div>
		</div>
	</footer>
</div>
