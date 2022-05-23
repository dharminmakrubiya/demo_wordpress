<?php
/**

 * Template Name: abc
 *
 */
get_header(); 
?>

<?php
function showpost()
	{
		//Show the post title
		$mypost = '<h5>Post Titles</h5>';

		//featch wp_query
		$my = new WP_Query(array (
			'post_status' => 'publish',
			'post_type' => 'post',
			'post_per_page' => 6
		));


		//pagination 

		paginate_links( array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => '?page=%#%',
			'current' => max(1,get_query_var('paged')),
			'total' => $my->max_num_pages,
		 ));






		//Using a while loop to show a available post in the list

		while ($my -> have_posts())
		{	
			//get the post
			$my -> the_post();

			//get the post title 
			$mypost = $mypost.get_the_title().'<br>';

			//get the post image
			$mypost = $mypost.get_the_post_thumbnail().'<br>';

			//get the post discriptions
			$mypost = $mypost.get_the_content().'<br>';
			$mypost = $mypost.my_number_pagination($my).'<br>';

			//get the post release date
			$mypost = $mypost.get_the_date().'<br>';
			
		}

		//wp_reset_post data is loop is finish then postdata reset
		wp_reset_postdata();

		//return the all post uaing a $mypost
		return $mypost;
	}

	//add this shortcode [showpost] to particular page and posts are show in page  
	add_shortcode('showpost','showpost');
	
?>
<?php get_footer();	?>