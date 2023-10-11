
<?php

 // Si pas d'erreurdétectée, affiche message succès
 if (!empty($_POST["user_name"]) && 
 !empty($_POST["user_prénom"]) && 
 !empty($_POST["user_email"]) && 
 filter_var($_POST["user_email"], FILTER_VALIDATE_EMAIL) && 
 !empty($_POST["user_téléphone"]) && !empty($_POST["user_sujet"]) &&
  !empty($_POST["user_message"]))  {
 
     echo "Merci" . " " . $_POST["user_prénom"] . " " . $_POST["user_name"] .  " de nous avoir contacté 
     à propos de votre :" . $_POST["user_sujet"] . ". Un de nos conseillers vous contactera soit à l’adresse " 
     . " " .  $_POST["user_email"] . " ou par téléphone au " . $_POST["user_téléphone"] . 
     " dans les plus brefs délais pour traiter votre demande : ". $_POST["user_message"];
    }

 else {
    echo "Erreur de saisie pour un ou plusieurs champs, merci de réessayer.";
 }

?>


