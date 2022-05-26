<!-- <h1>Custom Theme!</h1>
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
</body>
</html> -->
<?php
get_header();

if ( have_posts() ) :
	
	while ( have_posts() ) :

		the_post();
		?>

		<article <?php post_class(); ?>>
		
			<header>
				<?php the_title( '<h4>', '</h4>' ); ?>
			</header>
		
			<div >
				<?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?>
			</div>
		
		</article>
		
		<?php


	endwhile;

else :
	?>
<?php
endif;

get_footer();

?>

