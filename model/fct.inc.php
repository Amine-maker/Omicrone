<?php
function tableauContrat($contenu){
    $tableau_html ="<TR class='contrat'>"
        ."<td>N°</td>"
        ."<td>Type de contrat</td>"
        ."<td>Date Début</td>"
        ."<td>Date fin</td>"
        ."<td>Salaire</td>"
        ."<td>Tarif</td>"
        ."<td>Raison Social</td>"
        ."<td>Modifier</td>"
        ."<td>Supprimer</td>"
        ."</TR>";
$noligne=0;
foreach ($contenu as $ligne){
    $tabcontrat=array(); //creer un tableau
$ligne_html ="";
foreach($ligne as $cellule){
    array_push($tabcontrat,$cellule);
}
for($i=0;$i<sizeof($tabcontrat);$i++) //parcours du tableau
{
    if($i==0){
        $idContrat = $tabcontrat[$i];
        //print_r($idContrat);
    }
    if($i==6){
       $ligne_html .="<td><a>$tabcontrat[$i]</a>";
   }
   
   elseif($i<7){
   $ligne_html .="<td class='filter_td'>$tabcontrat[$i]</td>";
   }
   
  
   if($i==6){
        $ligne_html .= "<TD><a href='index.php?uc=contrat&action=modifC&idcontrat=$idContrat'><img src=image/modif.png weight=20px height=20px></a></TD>";
   }
   if($i==6){ 
        $ligne_html .= "<TD><a href='#' onClick=\"if(confirm('Etes vous sur de vouloir supprimer?'))document.location.href='index.php?uc=contrat&action=suppcontrat&idcontrat=$idContrat'\">"
                 . "<img src=image/poubelle.png weight=20px height=20px></a></TD>";
   }
}
$id=$ligne['idcontrat'];
if($noligne%2==0){
$tableau_html .="<TR bgcolor=#EEEDED>$ligne_html</TR>";
}
else {
  $tableau_html .="<TR bgcolor=#F6F6F6>$ligne_html</TR>";
}
$noligne++;
}
return "<TABLE class='filter'>$tableau_html</TABLE>";
}

//tableau renvoyant la liste des clients
function tableauClient($contenu){
    $tableau_html ="<TR class='contrat'>"
        ."<td>N°</td>"
        ."<td>Raison Social</td>"
        ."<td>Siret</td>"
        ."<td>Adresse</td>"
        ."<td>Ville</td>"
        ."<td>Code Postale</td>"
        ."<td>Email 1</td>"
        ."<td>Email 2</td>"
        ."<td>Email 3</td>"
        ."<td>Bureau</td>"
        ."<td>Fax</td>"
        ."<td>Tel</td>"
        ."<td>Modifier</td>"
        ."<td>Supprimer</td>"
        ."</TR>";
$noligne=0;
foreach ($contenu as $ligne){
    $tabclient=array(); //creer un tableau
    $ligne_html ="";
foreach($ligne as $cellule){
    array_push($tabclient,$cellule);
}
for($i=0;$i<sizeof($tabclient);$i++) //parcours du tableau
{
    if($i==0){
        $idclient = $tabclient[$i];
         $ligne_html .="<td class='filter_td'>$tabclient[$i]</td>";
        //print_r($idclient);
    }
   
   elseif($i<12){
   $ligne_html .="<td class='filter_td'>$tabclient[$i]</td>";
   }
   if($i==11){
        $ligne_html .= "<TD><a href='index.php?uc=client&action=modifclient&idclient=$idclient'><img src=image/modif.png weight=20px height=20px></a></TD>";
   }
   if($i==11){ 
        $ligne_html .= "<TD><a href='#' onClick=\"if(confirm('Etes vous sur de vouloir supprimer?'))document.location.href='index.php?uc=client&action=suppclient&idclient=$idclient'\">"
                 . "<img src=image/poubelle.png weight=20px height=20px></a></TD>";
   }
}
$id=$ligne['idclient'];
if($noligne%2==0){
$tableau_html .="<TR bgcolor=#EEEDED>$ligne_html</TR>";
}
else {
  $tableau_html .="<TR bgcolor=#F6F6F6>$ligne_html</TR>";
}
$noligne++;
}
return "<TABLE class='filter'>$tableau_html</TABLE>";
}
?>