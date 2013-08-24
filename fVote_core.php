<?php




function create_ypVote($atts) {
    global $wpdb;
    $table_name = $wpdb->prefix . "ypVote";

 
 ob_start();

}


add_shortcode('ypVote', 'create_ypVote');


?>