<?php 
    class dharmin{
        
        public function myfunction() {

            $args = array(
                'taxonomy' => 'category',
                'orderby' => 'meta_value_num',
                'post_type' => 'post',
                'hide_empty' => true
             );
            $cat = get_terms($args);
    
            $args = array( 
                'posts_per_page' => '', 
                'order' => 'ASC',
                'orderby' => 'ID',
                'post_type' => 'post',
                'post_status' => 'publish'
                );
            if (isset($_GET['category']) && $_GET['category'] != null)
               {
                  $categoryPost = $_GET['category'];
                  $args['tax_query'] = array(
                      array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => $_GET['category'],
                    )
                  );
              }
            $data = array();
            $query = new \WP_Query($args);
            if ($query->posts != null) {
                
                foreach ($query->posts as $i => $post) {
                    $terms =  get_the_terms($post->ID, 'category');
                    $data[$i]["category"] = $terms;
                    $data[$i]["title"] = $post->post_title;
                    $data[$i]["post_url"] = get_permalink($post->ID);
                    $data[$i]["feature_image_url"] = get_the_post_thumbnail_url($post->ID);
                    $data[$i]["short_description"] = $post->post_content;
                }
                
            }
            return $data;
        }
        
    }
?>