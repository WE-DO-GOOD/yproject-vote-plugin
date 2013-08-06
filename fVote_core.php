<?php

function create_fVote($atts) {
    global $wpdb;
    $table_name = $wpdb->prefix . "fVote";

 
 ob_start();


    if (isset($_POST['submit']))
    {


        $local                      = $_POST[ 'local' ];
        $environnemental            = $_POST[ 'environnemental' ];
        $economique                 = $_POST[ 'economique' ];
        $social                     = $_POST[ 'social' ];
        $autre                      = $_POST[ 'autre' ];
        $precision                  = $_POST[ 'precision' ];
        $impact_negatif             = $_POST[ 'impact_negatif' ];
        $pret_collect               = $_POST[ 'pret_collect' ];
        $investir                   = $_POST[ 'investir' ];
        $sum                        = $_POST[ 'sum' ];
        $risque                     = $_POST[ 'risque' ];
        $tres_faible                = $_POST[ 'tres_faible' ];
        $plutot_faible              = $_POST[ 'development_strategy' ];
        $modere                     = $_POST[ 'modere' ];
        $plutot_eleve               = $_POST[ 'plutot_eleve' ];
        $tres_eleve                 = $_POST[ 'tres_eleve' ];
        $responsable                = $_POST[ 'responsable' ];
        $mal_explique               = $_POST[ 'mal_explique' ];
        $service                    = $_POST[ 'service' ];
        $equipe                     = $_POST[ 'equipe' ];
        $plan                       = $_POST[ 'plan' ];
        $porteur                    = $_POST[ 'porteur' ];
        $expliquer                  = $_POST[ 'expliquer' ];
           
         
         
        	
     	
     	/*
     	*global $wpdb;
     	*$wpdb->insert( $table_name , array('vote' => $ergebnis, 'question' => $question,  'subjects' => $fgh,  'remarks' => $hgf));
     	*/
     	//echo "<h4>".$ergebnis."</h4>";
    }
     else{
         
         echo "<b>".$question."</b>";
        ?>
        <form name="fVote" action="<?php get_permalink();?>" method="POST" class="fVote-form" enctype="multipart/form-data">


            <div class="left post_bottom_infos">
            
                <fieldset>
                    <legend>Votez sur ce projet</legend>
                    
                    <input type="radio" name="radios1" id="impact_positif" value="impact_positif">
                    Je pense que ce projet va avoir un impact positif
                    </input>

                    <div id="impact_positif_choix">
                        <input type="checkbox" name="local" id="local" value="local">
                          Local
                        </input></br>
                        <input type="checkbox" name="environnemental" id="environnemental" value="environnemental">
                          Environnemental
                        </input></br>
                        
                        <input type="checkbox" name="social" id="social" value="social">
                          Social
                        </label></br>
                        <input type="checkbox" name="autre" id="autre" value="autre">
                          Autre
                        </input>
                        <input id="precision" name="precision" type="text" placeholder="précisez ici" />
                    </div>
                    
                    <input type="radio" name="radios1" value="impact_negatif" checked="checked">
                      Je désapprouve ce projet car son impact prévu n'est pas significatif
                    </input></br></br>
                    
                    <input type="radio" name="radios2" value="pret_collect">
                     Je pense que ce projet est prêt pour la collecte
                    </input></br>

                    <div>
                        <input type="checkbox" id="investir" name="investir" value="investir">
                          Je serais prêt à investir
                        </input>

                        <input id="sum" name="sum" type="text" placeholder="200€" /></br>

                        <input type="checkbox" id="risque" name="risque" value="risque">
                          Risque
                        </input></br>
                        <select id="liste_risque" name="liste_risque" >
                          <option id="tres_faible">Le risque très faible</option>
                          <option id="plutot_faible">Le risque plutôt faible</option>
                          <option id="modere">Le risque modéré</option>
                          <option id="plutot_eleve">Le risque plutôt élevé</option>
                          <option id="tres_eleve">Le risque très élevé</option>
                        </select>
                        <input type="radio" name="radios2" value="pret_collect">
                         Je pense que ce projet doit être retravaillé avant de pouvoir être financé. Sur quels points 
                        </input>
                    </div>
                    <div>
                        <input type="checkbox" id="responsable" name="responsable" value="responsable">
                          Pas d’impact responsable
                        </input></br>

                        <input type="checkbox" id="mal_explique" name="mal_explique" value="mal_expliqué">
                          Projet mal expliqué  
                        </input></br>

                        <input type="checkbox" id="service" name="service" value="service">
                          Qualité du produit/service
                        </input></br>

                        <input type="checkbox" id="equipe" name="equipe" value="equipe">
                          Qualité de l’équipe
                        </input></br>

                        <input type="checkbox" id="plan" name="plan" value="plan">
                          Qualité du business plan
                        </input></br>

                        <input type="checkbox" id="innovation" name="innovation" value="innovation">
                          Qualité d’innovation
                        </input></br>

                        <input type="checkbox" name="porteur" value="porteur" id="porteur">
                          Qualité du marché, porteur
                        </input></br>

                        <textarea type="text" name="expliquers" id="expliquer" value="expliquer">
                          Expliquer pourquoi
                        </textarea></br>
                    </div>
                    <INPUT TYPE="submit" name="submit" value= "valider" />
                    
                 </fieldset>
            
            </div>
            
            
         </form>   
    

<?php

}
}
add_shortcode('fVote', 'create_fVote');

?>