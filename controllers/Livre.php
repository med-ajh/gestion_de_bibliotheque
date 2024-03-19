<?php
include_once 'Metier/Biblio.php';
include_once 'Metier/Livre.php';
 $B=new Biblio("biblio");

$action="liste";
if(count($infos_adresse)>1)
$action=$infos_adresse[1];

   switch($action){
       case 'insert':                     
                      $B->Ajouter(new Livre(null, $_POST['code'], $_POST['titre'],$_POST['auteur'],$_POST['nbr_pages']));
                      header('Location:../livre');
                      break;
       case 'update' :
                        $B->Modifier(new Livre($infos_adresse[2], $_POST['code'], $_POST['titre'],$_POST['auteur'],$_POST['nbr_pages']));
                        header('Location:../../livre');
                       break;
       case 'delete' :
                       $B->Supprimer(new Livre($infos_adresse[2])); 
                       header('Location:../../livre');     
                      break;
       case 'new' : $livre=array("","","","","");
                    include('IHM/livre/Form.php');
                    break;
       case 'edit' : 
                         $livre=$B->Rechercher(new Livre($infos_adresse[2]))->fetch(PDO::FETCH_NUM);                
                         include_once('IHM/livre/Form.php');
                    break;
       default: include_once('IHM/livre/Affichage.php');
   } 
  
   



