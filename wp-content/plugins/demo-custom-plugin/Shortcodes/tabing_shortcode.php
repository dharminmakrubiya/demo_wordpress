<?php


function read()
{
    $cat = category_wise_post();
?>
    <br>
    <br>
    <script>
        // function openCity(evt, cityName) {
        //     var i, tabcontent, tablinks;
        //     tabcontent = document.getElementsByClassName("tabcontent");
        //     for (i = 0; i < tabcontent.length; i++) {
        //         tabcontent[i].style.display = "none";
        //     }
        //     tablinks = document.getElementsByClassName("tablinks");
        //     for (i = 0; i < tablinks.length; i++) {
        //         tablinks[i].className = tablinks[i].className.replace(" active", "");
        //     }
        //     document.getElementById(cityName).style.display = "block";
        //     evt.currentTarget.className += " active";
        // }

        function openCity(evt, cityName) {

            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            var elms = document.querySelectorAll("[id='" + cityName + "']");
            var a = elms.length;
            for (var i = 0; i < elms.length; i++) {
                elms[i].style.display = 'block';
                evt.currentTarget.className += " active";
            }
        }
    </script>

    <div class="tab">
        <?php
        // echo "<pre>";
        // print_r($cat);
        
        foreach ($cat as $i => $data) {
        ?>
            <button class="btn btn-dark" onclick="openCity(event, '<?php echo $i; ?>')"><?php echo $i; ?></button>
            <!-- <button class="tablinks" onclick="openCity(event, 'Paris')">Paris</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button> -->
        <?php } ?>
    </div>
    <br>


    <section>
        <div class="container">
            <div class="row mt-5 mb-5">
                <?php foreach ($cat as $i => $data) { ?>
                    <?php foreach ($data as $pdata) { ?>
                        <div id="<?php echo $pdata['category']; ?>" class="col-md-4 tabcontent">
                            <div class="card card-01">
                                <img class="card-img-top" src="<?php echo $pdata['feature_image_url']; ?>" alt="Card image cap">
                                <div class="card-body">
                                    <span class="badge-box"><i class="fa fa-check"></i></span>
                                    <h4 class="card-title"><?php echo  $pdata['title'];  ?></h4>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <a href="<?php $pdata['link']; ?>" class="btn btn-default text-uppercase">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>




<?php

}

add_shortcode('category_wise_post_shortcode', 'read');






// add_shortcode( 'post-1' , 'display_custom_post_type' );

// function display_custom_post_type($atts) {

//     extract( shortcode_atts( array(
//         'category' => ''
//     ), $atts ) );

//     $args = array(
//         'numberposts' => -1,
//         'orderby' => 'menu_order',
//         'order' => 'ASC',
//         'post_type' => 'post'
//     );

//     if ( ! empty( $category ) ) {
//         $args['category_name'] = $category;
//     }

//     $posts = get_posts( $args );
//     // print_r($posts);
//     // die;
//     $abc  = '<div>';

//     foreach ( $posts as $post ) { 
//        $abc .='<h2>'.$post->post_title. '</h2>';
//     }
//     $abc .= '</div>';

//     return $abc;
// }

?>