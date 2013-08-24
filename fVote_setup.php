<?php

function setup_ypVote(){
    
    
    global $wpdb;
    
    $table_name = $wpdb->prefix . "ypVotes";

$sql = "CREATE TABLE $table_name (
  id mediumint(9) NOT NULL AUTO_INCREMENT,
  impact TEXT DEFAULT '',
  local TEXT DEFAULT '',
  environmental TEXT DEFAULT '',
  social TEXT DEFAULT '',
  autre TEXT DEFAULT '',
  pret_pour_collect TEXT DEFAULT '',
  liste_risque TEXT DEFAULT '',
  retravaille TEXT DEFAULT '',
  pas_responsable TEXT DEFAULT '',
  mal_explique TEXT DEFAULT '',
  qualite_produit TEXT DEFAULT '',
  qualite_equipe TEXT DEFAULT '',
  qualite_business_plan TEXT DEFAULT '',
  qualite_innovation TEXT DEFAULT '',
  qualite_marche TEXT DEFAULT '',
  conseil TEXT DEFAULT '',
  
  sum INT,
  isvoted BOOLEAN,
  
  desaprouve TEXT DEFAULT '',

  user_first_name TEXT DEFAULT '',
  user_last_name TEXT DEFAULT '',
  user_email TEXT DEFAULT '',
  user_login TEXT DEFAULT '',

  user_id INT NOT NULL,
  campaign_id INT NOT NULL,

  
  UNIQUE KEY id (id)
);";

require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
dbDelta( $sql );

}

function uninstall_ypVotes(){


     
    global $wpdb;
    
    $table_name = $wpdb->prefix . "ypVotes";

$sql = "DROP TABLE $table_name ;";

require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
dbDelta($sql);

}






?>