<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #content -->

	<footer class="footer-info footer g-gutter">
			<div class="container">
				<div class="row mx-sm-0 mx-intermediate-52">
					<div class="footer__col col-sm-3 col-md-3"> <a href="/">
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<?php the_custom_logo(); ?><?php //bloginfo('name');
															?>
								<img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="/wp-content/themes/mint/dist/images/logo/logo_10f1e6f6.png" alt="" class="footer__logo lazy" /></a> </div>
					<div class="footer__col col-sm-3 col-md-3">
						<div class="footer__col-wrapper dropdown">
							<h6 class="footer__col-head dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact us</h6>
							<ul class="footer__col-links dropdown-menu">
								<?php
								$menuLocations1 = get_nav_menu_locations();
								$menuID1 = $menuLocations1['my-custom-menu'];
								// echo "<pre>";
								// print_r($menuLocations1);
								$abc = wp_get_menu_array($menuID1);

								?>
								<?php foreach ($abc as $xyz) { ?>
									<?php $c ?>
									<!-- <li class="footer__col-link-wrapper"> <a href="mailto:hello@rhad.agency" class="footer__col-link">hello@rhad.agency</a></li> -->
									<li class="footer__col-link-wrapper"> <a href="<?php echo $xyz['url']; ?>" class="footer__col-link"><?php echo $xyz['title']; ?></a></li>
							</ul>
						<?php } ?>
						</div>
					</div>
					<div class="footer__col col-sm-3 col-md-3">
						<div class="footer__col-wrapper dropdown">
							<h6 class="footer__col-head dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Solutions</h6>

							<ul class="footer__col-links dropdown-menu">
								<?php
								$menuLocations2 = get_nav_menu_locations();
								$menuID2 = $menuLocations2['my-custom-menu-dharmin'];
								// echo "<pre>";
								// print_r($menuLocations1);
								$abc = wp_get_menu_array($menuID2);

								?>
								<?php foreach ($abc as $xyz) { ?>
									<?php $c ?>
									<li class="footer__col-link-wrapper"> <a href="<?php echo $xyz['url']; ?>" class="footer__col-link"><?php echo $xyz['title']; ?></a></li>
									<!-- <li class="footer__col-link-wrapper"> <a href="/solutions/technology/" class="footer__col-link">Technology </a></li>
								<li class="footer__col-link-wrapper"> <a href="/solutions/marketing/" class="footer__col-link">Marketing </a></li> -->
							</ul>
						<?php } ?>
						</div>
					</div>
					<div class="footer__col col-sm-3 col-md-3">
						<div class="footer__col-wrapper dropdown">
							<h6 class="footer__col-head dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Partners with</h6>
							<div class="dropdown-menu"> <img src="" data-src="/wp-content/themes/mint/dist/images/footer/soda_af5cae11.png" alt="" class="footer__company-logo lazy"> </div>
						</div>
					</div>
				</div>
				<div class="row footer__second-row mx-0 justify-content-end mx-sm-0 mx-intermediate-52">
					<div class="footer__col col-sm-3 col-md-3">
						<div class="footer__col-wrapper dropdown">
							<h6 class="footer__col-head footer__col-head_white dropdown-toggle mb-md-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">RHAD India</h6>
							<ul class="footer__col-links dropdown-menu">
								<li class="footer__col-link-wrapper footer__col-link-wrapper-max max-150"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14689.098392358155!2d72.50849773201469!3d23.013687709292554!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e859816e51305%3A0xb773e26008f4d7e0!2sSoda%20In%20Mind!5e0!3m2!1sen!2sin!4v1656659768006!5m2!1sen!2sin" width="200" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
								</li>
							</ul>
						</div>
					</div>
					<div class="footer__col col-sm-3 col-md-3">
						<div class="footer__col-wrapper dropdown">
							<h6 class="footer__col-head dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About us</h6>
							<ul class="footer__col-links dropdown-menu">
								<?php
								$menuLocations1 = get_nav_menu_locations();
								$menuID1 = $menuLocations1['my-custom-menu-about'];
								// echo "<pre>";
								// print_r($menuLocations1);
								$abc = wp_get_menu_array($menuID1);

								?>
								<?php foreach ($abc as $xyz) { ?>
									<?php $c ?>
									<li class="footer__col-link-wrapper"> <a href="<?php echo $xyz['url']; ?>" class="footer__col-link"><?php echo $xyz['title']; ?></a></li>
							</ul>
						<?php } ?>
						</div>
					</div>
					<div class="footer__col col-sm-3 col-md-3">
						<div class="footer__col-wrapper dropdown">
							<h6 class="footer__col-head dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Follow us</h6>
							<div class="footer__col-links dropdown-menu mt-83">
								<div class="d-flex footer__social-icons"> <a href="" target="_blank"> <img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="https://rhad.agency/wp-content/uploads/2022/04/facebook-_-24-_-Outline.svg" alt="Facebook"> </a> <a href="" target="_blank"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="https://rhad.agency/wp-content/uploads/2022/04/linkedin-_-24-_-Outline.svg" alt="Linkedin" class="mx-21 lazy"> </a> <a href="" target="_blank"> <img class="lazy" src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="https://rhad.agency/wp-content/uploads/2022/04/instagram-_-24-_-Outline.svg" alt="Instagram"> </a> </div>
							</div>
						</div>
					</div>
				</div>
				<hr class="footer__seperator footer__hide-tablet">
				<div class="row mt-md-60 my-47 mt-xl-100 footer__tablet-content m-0 mx-sm-0 mx-intermediate-52">
					<div class="col-md-5">
						<div class="row footer__company-info m-0">
							<div class="col p-0"> <a href="/" class=""> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="/wp-content/themes/mint/dist/images/logo/logo_10f1e6f6.png" alt="" class="footer__logo_mobile lazy" /> </a>
								<div class="footer__copyright">@ 2022 RHAD AGENCY. All Rights Reserved.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
   <a href="#masthead" id="scroll-up"><span class="genericon genericon-collapse"></span></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
