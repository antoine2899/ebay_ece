<?php
    $N = isset($_POST["numero"])?$_POST["numero"]:"";
    $A = isset($_POST["nom"])?$_POST["nom"]:"";
    $T = isset($_POST["age"])?$_POST["age"]:"";
    $DN = isset($_POST["status"])?$_POST["status"]:"";
 


    $error="";

    if($N==""){$error .= "Numéro du Client vide <br/>";}
    if($A==""){$error .= "Nom du Client vide <br/>";}
    if($T==""){$error .= "Age vide <br/>";}
    if($DN==""){$error .= "Status du Client vide <br/>";}

    if($error=="") {
        
       if($T<0 and $T>12)
       {
            if($DN == "enfant"){
                $error .= "ERREUR <br/>";
            }
       }
    if ($DN == "enfant")
   {
     $rabais = 1;
   }
   if ($DN == "etudiant")
   {
      $rabais = 0.25;
   }
   if ($DN == "employe")
   {
       $rabais = 0;
   }
   if ($DN == "senior")
   {
       $rabais = 0.2;
   }
    if ($DN == "work")
   {
      $rabais = 0.75;
   }

  $prix = 15 - (15*$rabais);
        
        echo "Formulaire valide <br/>";
        echo "Le Numéro du Client est : $N "; echo "<br/>";
        echo"Le Nom du Client est : $A"; echo "<br/>";
        echo"L'Age est : $T"; echo "<br/>";
        echo"Le status du client est : $DN"; echo "<br/>";
        echo"Prix : " . $prix . "€";
    }

    else {
        echo "Erreur : $error";
    }
?>