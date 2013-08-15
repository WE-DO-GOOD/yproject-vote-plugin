<?php




function create_fVote($atts) {
    global $wpdb;
    $table_name = $wpdb->prefix . "fVote";

 
 ob_start();

}


add_shortcode('fVote', 'create_fVote');


?>