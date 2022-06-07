<?php
/* Template Name: Portfolio Template */
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">





<?php

$postid = get_post_field('post_name', get_post());

print_r($postid);

$args = array(
    'post_type' => 'portfolio',
    'posts_per_page' => 10
);


if (isset($_GET['post_tag']) ) {

    $args['tax_query'] = array(
        array(
            'taxonomy' => 'categories',
            'field' => 'slug',
            'terms' => $_GET['post_tag'],
        )

    );
}
$the_query = new WP_Query($args);
?>


<div class="container">
    <h1>Personal Portfolio</h1>
</div>
<?php
$cat = get_categories(array('taxonomy' => 'categories'));
// echo "<pre>";
// print_r($cat);



foreach ($cat as $catvalue) {

    //echo $catvalue->name."<br>";                                           
    // echo '<a href=\"$postid?post_tag=$catvalue->slug\">$catvalue->slug </a>';
    echo "<div class='container'><a href=\"$postid?post_tag=$catvalue->name\">$catvalue->name </a></div>";
    // echo "<div class="container"><a href="' . get_category_link($catvalue->term_id) . '">' . $catvalue->slug . '</a></div>";


}
?>


<?php if ($the_query->have_posts()) : ?>
    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
        <div class="card-deck">
            <div class="container">
                <div class="card-group">
                    <div class="card">
                        <div class="card-img-top"><?php the_post_thumbnail(); ?></div>
                        <div class="card-body">
                            <h5 class="card-title "><?php the_title(); ?></h5>
                            <p class="card-text"><?php the_content(); ?> </p>
                            <p class="card-text"><small class="text-muted"><?php the_date(); ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
<?php else :  ?>
    <p><?php _e('Sorry, no posts matched your portfolio.'); ?></p>
<?php endif; ?>