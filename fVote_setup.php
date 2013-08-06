<?php

function setup_fVote(){
    
    
    global $wpdb;
    
    $table_name = $wpdb->prefix . "fVote";

$sql = "CREATE TABLE $table_name (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  vote TEXT DEFAULT '' NOT NULL,
  question TEXT DEFAULT '' NOT NULL,
  subjects TEXT DEFAULT '' NOT NULL,
  remarks TEXT DEFAULT '' NOT NULL,
  impact_positif TEXT DEFAULT '',
  local  BOOLEAN,
  environemental  BOOLEAN,
  economique BOOLEAN,
  social BOOLEAN,
  autre BOOLEAN,
  
  impact_negatif BOOLEAN,
  pret_collect BOOLEAN,
  investir BOOLEAN,
  sum INT,
  risque BOOLEAN,
  tres_faible BOOLEAN,
  plutot_faible BOOLEAN,
  modere BOOLEAN,
  plutot_eleve BOOLEAN,
  tres_eleve BOOLEAN,
  responsable BOOLEAN,
  mal_explique BOOLEAN,
  service BOOLEAN,
  equipe BOOLEAN,
  plan BOOLEAN,
  porteur BOOLEAN,
  
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





?>