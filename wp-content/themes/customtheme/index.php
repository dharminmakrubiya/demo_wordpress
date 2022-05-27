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

		<article>
		<div class="container pt-3" >
			<div class="card-deck mb-5">
				<div class="card">
				<img class="card-img-top mt-3" ><?php the_post_thumbnail() ?></img>
					<div class="card-body">
						<h5 class="card-title"><a href="<?php the_permalink() ?>"><?php the_title( '<h4>', '</h4>' ); ?></a></h5>
						<p class="card-text"><?php the_content( esc_html__( 'Continue reading &rarr;', 'my-custom-theme' ) ); ?></p>
						
					</div>
					<div class="card-footer">
							<p class="card-text"><small class="text-muted"><?php the_date() ?></small></p>
					</div>
				</div>
			</div>
			
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

