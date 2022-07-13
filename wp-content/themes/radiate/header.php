<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<style>
        .product-image img {
            width: 150px;
            height: 300px;

            object-fit: contain;
        }

        img.lazy {
            min-height: 1px
        }
    </style>
	<link rel="preload" href="https://rhad.agency/wp-content/plugins/w3-total-cache/pub/js/lazyload.min.js" as="script">
	<meta charset="utf-8">
	<link rel="preload" href="https://rhad.agency/wp-content/cache/fvm/min/1654777180-css1060b80cc2a193d6a84c33787b431172ebbb5ff147ea28bc204c9b5aaeb91.css" as="style" media="all" />
	<link rel="preload" href="https://rhad.agency/wp-content/cache/fvm/min/1654777180-jsd3ca6efc8a0c56cb62dbb0b4e2af9e92b4c3fcd289d95c1bf61b4b74b56bbb.js" as="script" />
	<script data-cfasync="false">
        function fvmuag() {
            var e = navigator.userAgent;
            if (e.match(/x11.*ox\/54|id\s4.*us.*ome\/62|oobo|ight|tmet|eadl|ngdo|PTST/i)) return !1;
            if (e.match(/x11.*me\/86\.0/i)) {
                var r = screen.width;
                if ("number" == typeof r && 1367 == r) return !1
            }
            return !0
        }
    </script>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<title>RHAD | Digital Insights</title>
	<meta name="description" content="RHAD is the best agency with the marketing insights that help companies to market their services through design, digital, and technology." />
	<link rel="canonical" href="https://rhad.agency/insights/" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="RHAD | Digital Insights" />
	<meta property="og:description" content="RHAD is the best agency with the marketing insights that help companies to market their services through design, digital, and technology." />
	<meta property="og:url" content="https://rhad.agency/insights/" />
	<meta property="og:site_name" content="RHAD" />
	<meta property="article:modified_time" content="2022-04-23T12:03:10+00:00" />
	<meta property="og:image" content="https://rhad.agency/wp-content/uploads/2020/06/for-link.png" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="628" />
	<meta name="twitter:card" content="summary_large_image" />
	<script type="application/ld+json" class="yoast-schema-graph">
        {
            "@context": "https://schema.org",
            "@graph": [{
                "@type": "Organization",
                "@id": "https://rhad.agency/#organization",
                "name": "Rhad",
                "url": "https://rhad.agency/",
                "sameAs": [],
                "logo": {
                    "@type": "ImageObject",
                    "@id": "https://rhad.agency/#logo",
                    "inLanguage": "en-US",
                    "url": "https://rhad.agency/wp-content/uploads/2021/10/logo.png",
                    "contentUrl": "https://rhad.agency/wp-content/uploads/2021/10/logo.png",
                    "width": 141,
                    "height": 34,
                    "caption": "Rhad"
                },
                "image": {
                    "@id": "https://rhad.agency/#logo"
                }
            }, {
                "@type": "WebSite",
                "@id": "https://rhad.agency/#website",
                "url": "https://rhad.agency/",
                "name": "RHAD",
                "description": "A smarter HR system for a smarter business",
                "publisher": {
                    "@id": "https://rhad.agency/#organization"
                },
                "potentialAction": [{
                    "@type": "SearchAction",
                    "target": {
                        "@type": "EntryPoint",
                        "urlTemplate": "https://rhad.agency/?s={search_term_string}"
                    },
                    "query-input": "required name=search_term_string"
                }],
                "inLanguage": "en-US"
            }, {
                "@type": "WebPage",
                "@id": "https://rhad.agency/#webpage",
                "url": "https://rhad.agency/",
                "name": "RHAD Agency",
                "isPartOf": {
                    "@id": "https://rhad.agency/#website"
                },
                "about": {
                    "@id": "https://rhad.agency/#organization"
                },
                "datePublished": "2020-05-12T10:20:49+00:00",
                "dateModified": "2022-06-15T13:07:19+00:00",
                "description": "A digital agency that helps companies to market their service and products through design, digital, and technology.",
                "breadcrumb": {
                    "@id": "https://rhad.agency/#breadcrumb"
                },
                "inLanguage": "en-US",
                "potentialAction": [{
                    "@type": "ReadAction",
                    "target": ["https://rhad.agency/"]
                }]
            }, {
                "@type": "BreadcrumbList",
                "@id": "https://rhad.agency/#breadcrumb",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Home"
                }]
            }]
        }
    </script>
	<link rel="stylesheet" href="https://rhad.agency/wp-content/cache/fvm/min/1654777180-css1060b80cc2a193d6a84c33787b431172ebbb5ff147ea28bc204c9b5aaeb91.css" media="all" />
	<script data-cfasync='false' src='https://rhad.agency/wp-content/cache/fvm/min/1654777180-jsd3ca6efc8a0c56cb62dbb0b4e2af9e92b4c3fcd289d95c1bf61b4b74b56bbb.js'></script>
	<style type="text/css" media="all">
		.recentcomments a {
			display: inline !important;
			padding: 0 !important;
			margin: 0 !important
		}
	</style>
	<link rel="icon" href="https://rhad.agency/wp-content/uploads/2021/10/single_logo.svg" sizes="192x192" />
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-134948247-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'UA-134948247-1');
	</script>
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-306906101"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());
		gtag('config', 'AW-306906101');
	</script>

	<script>
		function require(url, callback) {
			var s = document.createElement('script');
			s.type = 'text/javascript';
			s.async = true;
			s.src = url;
			s.addEventListener('load', callback);
			var x = document.getElementsByTagName('script')[0];
			x.parentNode.insertBefore(s, x);
		}
	</script>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>

<div id="parallax-bg">
	<?php if ( get_header_image() && function_exists( 'the_custom_header_markup' ) && is_front_page() && has_header_video() ) :
		the_custom_header_markup();
	endif; ?>
</div>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'radiate' ); ?></a>

	<?php do_action( 'before' ); ?>
	<header class="page__header position-fixed header  page__header_loading"> <a href="/" class="logo_link primary-nav__logo-mobile"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="/wp-content/themes/mint/dist/images/logo/logo_10f1e6f6.png" alt="" class="primary-nav__logo-mobile-img lazy"> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="/wp-content/uploads/2021/10/Frame-43-1.svg" alt="" class="primary-nav__logo-mobile-img_ipad lazy"> </a>
				<div class="container">
					<nav class="row no-gutters navbar navbar-white navbar-expand-sm header-main justify-content-space-between">
						<div class="col-12">
							<div class="navbar__toggle-wrapper"> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">
									<h5 class="text-primary">☰</h5>
								</button>
								<div class="navbar__logo"> </div>
							</div>
							<div class="row primary-nav mx-sm-0 mx-intermediate-52">
								<div class="col-12 col-md-4 primary-nav__main-logo justify-content-start align-items-center d-none d-md-flex">

									</a>
									<a href="/" class="primary-logo">
										<a href="<?php echo esc_url(home_url('/')); ?>">
											<?php the_custom_logo(); ?><?php //bloginfo('name');

																		?>

											<!-- <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="https://rhad.agency/wp-content/themes/mint/dist/images/logo/logo_10f1e6f6.png" alt="" class="primary-nav__logodeskop primary-nav__logodeskop_red lazy" /> <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%201%201'%3E%3C/svg%3E" data-src="https://rhad.agency/wp-content/themes/mint/dist/images/logo/white_rhad_b2bc970f.svg" alt="" class="primary-nav__logodeskop primary-nav__logodeskop_white lazy" /> -->
										</a>
								</div>
								<div class="col-12 col-md-8 col-lg-8 mt-65 mt-sm-0">
									<div class="collapse navbar-collapse" id="navbar-collapse">

										<ul class="primary-nav__items jsPrimaryMenu justify-content-start">
											<?php
											$menuLocations = get_nav_menu_locations();
											$menuID = $menuLocations['primary'];
											// print_r($menuLocations);
											$a = wp_get_menu_array($menuID);
											// echo "<pre>";
											// print_r($a);
											?>
											<?php foreach ($a as $me) { ?>
												<?php $c ?>

												<!-- <li class="nav-item dropdown primary-nav__item jsPrimaryParentdNav"> <a href="#" class="mr-2 dropdown-toggle nav-link header__items-menubox primary-nav__item-anchor jsPrimaryParentdNavLabel" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown"> Solutions </a>
												<div class="primary-nav__item-sub-menu dropdown-menu">
											
													<div class="primary-nav__item-sub-menu-col" style="width: auto;">
														<div class="primary-nav__item-sub-menu-wrapper"> <a href="https://rhad.agency/solutions/creative/" class="primary-nav__item-sub-menu-anchor jsPrimaryChildNav"> Creative </a> </div>
														<div class="primary-nav__item-sub-menu-wrapper"> <a href="https://rhad.agency/solutions/technology/" class="primary-nav__item-sub-menu-anchor jsPrimaryChildNav"> Technology </a> </div>
														<div class="primary-nav__item-sub-menu-wrapper"> <a href="https://rhad.agency/solutions/marketing/" class="primary-nav__item-sub-menu-anchor jsPrimaryChildNav"> Marketing </a> </div>
														<div class="primary-nav__item-sub-menu-wrapper"> <a href="https://rhad.agency/solutions/security/" class="primary-nav__item-sub-menu-anchor jsPrimaryChildNav"> Security </a> </div>
													</div>
												</div>
											</li> -->

												<li class="nav-item dropdown primary-nav__item jsPrimaryParentdNav">
													<a href="<?php echo $me['url']; ?>" class="mr-2 nav-link header__items-menubox primary-nav__item-anchor jsPrimaryParentdNavLabel" aria-haspopup="true" aria-expanded="false"> <?php echo $me['title']; ?> </a>
												</li>
												<!-- <li class="nav-item dropdown primary-nav__item jsPrimaryParentdNav"> <a href="https://rhad.agency/insights/" class="mr-2 nav-link header__items-menubox primary-nav__item-anchor jsPrimaryParentdNavLabel active" aria-haspopup="true" aria-expanded="false"> Insights </a> </li>
											<li class="nav-item dropdown primary-nav__item jsPrimaryParentdNav"> <a href="https://rhad.agency/psg/" class="mr-2 nav-link header__items-menubox primary-nav__item-anchor jsPrimaryParentdNavLabel" aria-haspopup="true" aria-expanded="false"> Grants </a> </li> -->
											<?php } ?>
										</ul>

										<li class="nav-item dropdown primary-nav__item primary-nav__item_btn jsPrimaryParentdNav"> <a href="http://mydemo.local/lets-talk/" class="btn btn_xxs btn_alpha w-sm-100 mb-xss-2 mb-sm-0 primary-nav__item_btn primary-nav__item_btn-talk" type="submit">Let’s talk</a> </li>
									</div>
								</div>
							</div>
						</div>
					</nav>
				</div>
			</header>

	<div id="content" class="site-content">
		<div class="inner-wrap clearfix">
