<?php

function setup_fVote(){
    
    
    global $wpdb;
    
    $table_name = $wpdb->prefix . "fVote";

$sql = "CREATE TABLE $table_name (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  impact TEXT DEFAULT '',
  retravaille TEXT DEFAULT '' ,
  liste_risque TEXT DEFAULT '',
  investir BOOLEAN,
  sum INT,
  risque BOOLEAN,
  isvoted BOOLEAN,
  
  user_id INT NOT NULL,
  campaign_id INT NOT NULL,

  
  UNIQUE KEY id (id)
);";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );

}

function uninstall_fVote(){


     
    global $wpdb;
    
    $table_name = $wpdb->prefix . "fVote";

$sql = "DROP TABLE $table_name ;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);

}
/*
* Permet d'initialiser les fonctionnalités liés des vote
*/

function vote_slider_init(){

  $labels =  array(
      'name'        => __( 'Votes', 'atcf' ),
      'singular_name'   => __( 'vote', 'atcf' ),
      'add_new_item'    => __( 'Add New Vote', 'atcf' ),
      'edit_item'     => __( 'Edit Vote', 'atcf' ),
      'new_item'      => __( 'New Vote', 'atcf' ),
      'all_items'     => __( 'All Votes', 'atcf' ),
      'view_item'     => __( 'View Vote', 'atcf' ),
      'search_items'    => __( 'Search Votes', 'atcf' ),
      'not_found'     => __( 'No Votes found', 'atcf' ),
      'not_found_in_trash'=> __( 'No Votes found in Trash', 'atcf' ),
      'parent_item_colon' => '',
      'menu_name'     => __( 'Votes', 'atcf' )
     );

  register_post_type( 'slide',
    array(
    'public' => true,
    'labels' => $labels,
    'capability_type' => 'post',
    'supports' =>('title'),
  ));
}



?>