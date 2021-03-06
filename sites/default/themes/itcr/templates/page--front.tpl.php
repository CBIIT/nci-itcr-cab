<!--start nci_header-->
<?php if ($alt_header): ?>
<div class="row full-width banner minibar">
	<div class="minibanner-white">
		<section class="row <?php print $alt_header_classes; ?>">
			<div class="large-8 columns left-banner-block">
				<?php if (!empty($page['minibarlogo'])): ?>
				<?php print render($page['minibarlogo']); ?>
				<?php endif; ?>
			</div>
			<div class="large-4 columns right-banner-block">
				<?php if (!empty($page['search'])): ?>
				<?php print render($page['search']); ?>
				<?php endif; ?>
			</div>
		</section>
	</div>
</div>
<?php endif; ?>
<!--end nci_header-->
<!--start nci_slogan-->
<?php if (!empty($page['minibarslogan'])): ?>
<div class="row full-width banner minibarslogan">
	<section class="row <?php print $alt_header_classes; ?>">
		<div class="large-12 columns slogan-banner-block">
			<?php print render($page['minibarslogan']); ?>
		</div>
	</section>
</div>
<?php endif; ?>
<!--end nci_slogan-->

<!--.page -->
<div role="document" class="page">

	<div class="row full-width header">

		<!--.l-header region -->
		<header role="banner" class="l-header">

			<?php if ($top_bar): ?>
			<!--.top-bar -->
			<?php if ($top_bar_classes): ?>
			<div class="<?php print $top_bar_classes; ?>">
				<?php endif; ?>
				<nav class="top-bar" <?php print $top_bar_options; ?>>
					<ul class="title-area">
						<li class="name">
							<h1>
								<?php print $linked_site_name; ?>
							</h1>
						</li>
						<li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a>
						</li>
					</ul>
					<section class="top-bar-section">
						<?php if ($top_bar_main_menu) :?>
						<?php print $top_bar_main_menu; ?>
						<?php endif; ?>
						<?php if ($top_bar_secondary_menu) :?>
						<?php print $top_bar_secondary_menu; ?>
						<?php endif; ?>
					</section>
				</nav>
				<?php if ($top_bar_classes): ?>
			</div>
			<?php endif; ?>
			<!--/.top-bar -->
			<?php endif; ?>

			<!-- Title, slogan and menu -->
			<?php if ($alt_header): ?>
			<section class="row <?php print $alt_header_classes; ?>">

<!--				<div class="large-4 columns left-head-block">
					<?php
					
					if ($linked_logo):
						print $linked_logo; 
					else:
						print render($page['logo']);
					endif; ?>

					<?php if ($site_name): ?>
					<?php if ($title): ?>
					<div id="site-name" class="element-invisible">
						<strong><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a></strong>
					</div>
					<?php else: /* Use h1 when the content title is empty */ ?>
					<h1 id="site-name">
						<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
					</h1>
				



					<?php endif; ?>
					<?php endif; ?>

					<?php if ($site_slogan): ?>
					<h2 title="<?php print $site_slogan; ?>" class="site-slogan">
						<?php print $site_slogan; ?>
					</h2>
					<?php endif; ?>

					<?php if ($alt_main_menu): ?>
					<nav id="main-menu" class="navigation" role="navigation">
						<?php print ($alt_main_menu); ?>
					</nav>
					<!-- /#main-menu -->
					<?php endif; ?>

					<?php if ($alt_secondary_menu): ?>
					<nav id="secondary-menu" class="navigation" role="navigation">
						<?php print $alt_secondary_menu; ?>
					</nav>
					<!-- /#secondary-menu -->
					<?php endif; ?>
				</div>-->

				<div class="large-12 columns right-head-block-menu">
					<div class="menu-wrapper">
						<?php if (!empty($page['menu'])): ?>
						<?php print render($page['menu']); ?>
						<?php endif; ?>
					</div>
				</div>

			</section>
			<?php endif; ?>
			<!-- End title, slogan and menu -->

		</header>
		<!--/.l-header -->

	</div>
	<!--/.row.full-width.header-->

	<div class="row full-width full-width-slider">

		<?php if (!empty($page['slider'])): ?>
		<div class="skip-link">
			<a class="element-invisible element-focusable" href="#">Use the left and right arrows to navigate slider</a>
			<a class="element-invisible element-focusable StopSliderClass" href="#">Pause</a>
			<a class="element-invisible element-focusable StartSliderClass" href="#">Play</a>
		</div>
		<!--/.featured -->
		<section class="l-slider">
			<div class="large-12">
				<?php print render($page['slider']); ?>
			</div>
		</section>
		<!--/.l-featured -->
		<?php endif; ?>

	</div>
	<!--/.row.full-width.slider-->

<div id="main-content"></div>

	<?php if (!empty($page['home_intro_videos'])): ?>
	<div class="row full-width main full-width-intro-videos">
		<main role="main" class="row l-main">
			<div class="<?php print $main_grid; ?> main columns main-content-wrapper">
				<div class="large-12">
					<?php print render($page['home_intro_videos']); ?>
				</div>
			</div>
			<!--/.main region -->
		</main>
		<!--/.main-->
	</div>
	<!--/.row.full-width.main-->
	<?php endif; ?>

	<?php if (!empty($page['home_funding_opps'])): ?>
	<div class="row full-width main full-width-funding-opps">
		<main role="main" class="row l-main">
			<div class="<?php print $main_grid; ?> main columns main-content-wrapper">
				<div class="large-12">
					<?php print render($page['home_funding_opps']); ?>
				</div>
			</div>
			<!--/.main region -->
		</main>
		<!--/.main-->
	</div>
	<!--/.row.full-width.main-->
	<?php endif; ?>

	<?php if (!empty($page['home_latest_news'])): ?>
	<div class="row full-width main full-width-latest-news">
		<main role="main" class="row l-main">
			<div class="<?php print $main_grid; ?> main columns main-content-wrapper">
				<div class="large-12">
					<?php print render($page['home_latest_news']); ?>
				</div>
			</div>
			<!--/.main region -->
		</main>
		<!--/.main-->
	</div>
	<!--/.row.full-width.main-->
	<?php endif; ?>





	<div class="row full-width footer">

		<!--.l-footer-->
		<footer class="l-footer row" role="contentinfo">
			<?php if (!empty($page['footer'])): ?>
			<div class="footer large-12 columns">
				<?php print render($page['footer']); ?>
			</div>
			<?php endif; ?>

			<?php if ($site_name) :?>
			<div class="copyright large-12 columns">
				&copy;
				<?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
			</div>
			<?php endif; ?>
		</footer>
		<!--/.footer-->

		<?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>

	</div>
	<!--/.row.full-width.footer-->

</div>
<!--/.page -->