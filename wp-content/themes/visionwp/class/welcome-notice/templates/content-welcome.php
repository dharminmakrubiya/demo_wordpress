<?php
/**
 * Template part for displaying the welcome notice
 *
 */
?>
<?php 
	$theme_detail = get_query_var( 'visionwp_welcome_notice_theme', false );
	if( !$theme_detail ){
		return;
	}
	$theme_name = $theme_detail[ 'name' ];

	$is_available = VisionWP_Welcome_Notice::is_plugin_installed();
	$is_activated = VisionWP_Welcome_Notice::is_plugin_activated();

	if( $is_available && !$is_activated ){
		$text = esc_html__( 'Clicking the button will activate it.', 'visionwp' );
	}else{
		$text = esc_html__( 'Clicking the button will install and activate it.', 'visionwp' );
	}
?>
<div class="notice notice-info is-dismissible rt-notice-wrapper">
    <div class="rt-welcome-notice">
		<div class="notice-content">
			<div class="notice-heading">
				<h1>
					<?php printf( '%s %s',
						esc_html__( 'Thank you for installing', 'visionwp' ),
						$theme_name
					); ?>						
				</h1>
			</div>
			<?php
				printf( '<p>%s <a href="%s" target="_blank">%s</a> %s %s</p>',
					esc_html__( 'Welcome! In order to import our', 'visionwp' ),
					esc_url( 'https://riseblocks.com/rt-easy-builder/starter-templates/' ),
					esc_html__( 'Starter Templates,', 'visionwp' ),
					esc_html__( 'we’ve assembled an importer plugin to get you started.', 'visionwp' ),
					$text
				);
			?>
			<div class="rt-welcome-notice-container">
				<button href="<?php echo esc_url( '#' ) ?>" class="rt-welcome-notice-started button-primary" data-status=<?php  echo $is_available && !$is_activated ? 'active' : 'install'; ?> >
					<?php
					if( $is_available && !$is_activated ){
						esc_html_e( 'Activate Plugin', 'visionwp' );
					}else{						
						printf( '%s %s',
							esc_html__( 'Get started with', 'visionwp' ),
							$theme_name
						);
					}
					?>
				</button>

				<button class="rt-welcome-notice-closed button-primary">
					<?php esc_html_e( 'Close', 'visionwp' ); ?>
				</button>
			</div>
		</div>
		<div class="rt-welcome-notice-image">
			<img src="<?php echo esc_url( get_template_directory_uri(). '/class/welcome-notice/assets/img/template.png' ); ?>">
		</div>
	</div>
</div>