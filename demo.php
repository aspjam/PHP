<?php   

/*
 rep<-non
 horaires<-[]

TANT QUE rep=="non"
    Demande l'heure d'ouverture
    Demande l'heure de fermeture
    L'heure de fermeture > heure d'ouverture
    Creneaux=[
        [9,12],[8,15]...
    ]
    Demande Avez vous terminer rentrer horaires : oui ou non  //$rep
FIN TANT QUE //rep

TANT QUE rep == oui   
        Demander de rentrer une heure
        Afficher : Magasin ouvert ou pas
        Demander Voulez vous rentrer une autre heure : oui ou non//$rep
       
FIN TANT QUE //rep  


*/

$rep="n";
$horaires=[];

while($rep == "n"){
    echo "Entrer une heure d'ouverture : ";
    $debut=(int)readline();
    echo "Entrer une heure de fermeture : ";
    $fin=(int)readline();

    if ($debut > $fin) {
        echo "\nHeure de fin {$debut} > {$fin} veuillez recommencer.";
        continue;
    }

    $horaires[]=[$debut,$fin];
        
    echo "\nAvez vous terminé de rentrer les horaires ? : Taper o/n \n";
    $rep=readline();
}

print_r($horaires);

while($rep=="o"){
    echo "\n\nEntrer une heure : ";
    $heureDemande=(int)readline();

    $test=null;
    foreach ($horaires as $heure) {
      if($heure[0]<=$heureDemande && $heureDemande<=$heure[1]){
       $test=true;
       break;
      }
      $test=false;
    }

    if ($test) {
        echo "\nLe magasin est ouvert";
    }else{
        echo "\nLe magasin est fermé";
    }

    
   

    echo "\nVoulez rentrer une autre heure ? : Taper o/n \n";
    $rep=readline();


}

