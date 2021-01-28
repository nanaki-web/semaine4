<?php
// application/controllers/Produits.php

defined('BASEPATH') OR exit('No direct script access allowed');

class Produits extends CI_Controller 
{

    public function liste()
    {
        // Déclaration du tableau associatif à tranmettre à la vue
        $aView = array();
        
        // Dans le tableau, on créé une donnée 'prénom' qui a pour valeur 'Dave'    
        $aView["prenom"] = "Dave";
        $aView["nom"] = "Loper";
        $aView["marque"] = ["Aramis", "Athos", "Clatronic", "Camping", "Green"];
        // On passe le tableau en second argument de la méthode 
        $this->load->view('liste', $aView);
        
       
    }
  
}
