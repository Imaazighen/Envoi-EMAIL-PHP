<?php


//$_POST est une super variable globale PHP qui est utilisée pour collecter des données de formulaire après avoir soumis un formulaire HTML avec method="post".
//$_POST est également largement utilisé pour passer des variables.

// isset Détermine si une variable est considérée définie, ceci signifie qu'elle est déclarée et est différente de null. 
// Permet de detecter si une variable existe ou pas

    if(isset($_POST['valider']))
    {
        
//if(isset($_POST['nom']) AND isset($_POST['sujet']) AND isset($_POST['email']) AND isset($_POST['message']))
//{
    
//!empty = Si le champ est différent de vide et donc rempli
    
            if(!empty($_POST['nom']) AND !empty($_POST['sujet']) AND !empty($_POST['email']) AND !empty($_POST['message']))
            {

//htmlspecialchars() est pratique pour éviter que des données fournies par les utilisateurs contiennent
//des balises HTML, comme pour un forum ou un chat.
//"&" (et commercial) devient "&amp;"
//""" (guillemets doubles) devient "&quot;" lorsque ENT_NOQUOTES n'est pas utilisée.
//"'" (guillemet simple) devient "&#039;" uniquement lorsque ENT_QUOTES est utilisée.
//"<" (inférieur à) devient "&lt;"
//">" (supérieur à) devient "&gt;"

             $name=htmlspecialchars($_POST['nom']);
             $sujet=htmlspecialchars($_POST['sujet']);
             $email=htmlspecialchars($_POST['email']);
             $message=htmlspecialchars($_POST['message']);
   
             mail("habchi.faredje@gmail.com",
                 $sujet, 
                 "Nom: " . $name . "\r\n" . 
                 "Email: " . $email . "\r\n" . 
                 "Sujet: " . $sujet . "\r\n" . 
                 "Message: " . $message, 
                 "From:$email" . "\r\n" . 
                 "Reply-to:" . $email);

               echo "<h1> 
               Bonjour <mark>$name</mark> 
               </br></br>
               Votre email: <mark>$email</mark>
               </br></br>
               le sujet de votre message: <mark>$sujet</mark>
               </br></br>
               Votre message: <mark>$message</mark> </h1>";
            }
        }
    // }



    
