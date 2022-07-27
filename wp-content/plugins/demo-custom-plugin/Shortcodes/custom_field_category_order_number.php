<?php 

function order_number_add() { 
    ?>
    <div class="form-field term-group">
        <label for="show_category">
          <?php echo( 'Category Order Number' ); ?> <input type="text" id="custom_order" name="custom_order" />
        </label>
    </div>
<?php
}
add_action( 'category_add_form_fields', 'order_number_add');


function order_number_edit( $term) {
    $show_category = get_term_meta( $term->term_id, 'custom_order', true ); ?>
	<?php print_r($show_category); ?>

    <tr>
        <th scope="row">
            <label for="custom_order"><?php echo( 'Order Number' ); ?></label>
        </th>
        <td>
            <input type="text" id="custom_order" name="custom_order" value="<?php echo $show_category ?>"/>
			<p>Enter Category Order Number</p>
        </td>
    </tr><?php
}
add_action( 'category_edit_form_fields', 'order_number_edit');


function order_number_save( $term_id) {
    if ( isset( $_POST[ 'custom_order' ] ) ) {
        update_term_meta( $term_id, 'custom_order' ,$_POST[ 'custom_order' ]);
    } else {
        update_term_meta( $term_id, 'show_category', '' );
    }
	
}
add_action( 'created_category', 'order_number_save');
add_action( 'edited_category', 'order_number_save');


// $args = array(
//     'taxonomy' => 'category',
//     'orderby' => 'meta_value_num',
//     'order' => 'ASC',
//     'hide_empty' => false,
//     'meta_query' => [[
//       'key' => 'custom_order',
//       'type' => 'NUMERIC',
//   ]],
// );
// $cat = get_terms($args);

?>