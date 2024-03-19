<?php
include_once 'Livre.php';
include_once 'Dictionnaire.php';
include_once __DIR__.'/../DAO/DAO.php';
class Biblio {
 private $dao;
 public function __construct($bd,$server="localhost",$user="root",$pass="") {
     $dsn="mysql:host=$server;dbname=$bd";
     $this->dao=new DAO($dsn,$user, $pass);
 }

//ajouter un document (livre ou dictionnaire) ;
public function Ajouter(Document $doc)
{
 $data=array( "code"=>$doc->getCode(),
             "titre"=>$doc->getTitre()
             );
 if($doc instanceof Livre)
 {
     $data["auteur"]=$doc->getAuteur();
     $data["nbr_pages"]=$doc->getNbr_pages();
     $this->dao->setTable("livre");
 }
 else
      {
        $data["nbr_def_mots"]=$doc->getNbr_def_mots();
        $this->dao->setTable("dictionnaire");
      }
 $this->dao->insert($data);
}
//modifier un document (livre ou dictionnaire) ;

public function Modifier(Document $doc)
{
$data=array("id"=>$doc->getId(),
             "code"=>$doc->getCode(),
             "titre"=>$doc->getTitre()
             );
 if($doc instanceof Livre)
 {
     $data["auteur"]=$doc->getAuteur();
     $data["nbr_pages"]=$doc->getNbr_pages();
     $this->dao->setTable("livre");
 }
 else
      {
        $data["nbr_def_mots"]=$doc->getNbr_def_mots();
        $this->dao->setTable("dictionnaire");
      }
 $this->dao->update($data);        
}

//Supprimer un document ;
public function Supprimer(Document $doc)
{
  if($doc instanceof Livre)
  $this->dao->setTable("livre");
  else
  $this->dao->setTable("dictionnaire");
  $this->dao->delete($doc->getId());    
}        
//rechercher un document ;

public function Rechercher(Document $doc)
{
  if($doc instanceof Livre)
  $this->dao->setTable("livre");
  else
  $this->dao->setTable("dictionnaire");
  return $this->dao->select($doc->getId());    
} 

//fournir la liste des documents (livres, dictionnaires ou les deux);
public function Lister(Document $doc=null)
{
  if($doc !=null){
  if($doc instanceof Livre)
    $this->dao->setTable("livre");
  else
    $this->dao->setTable("dictionnaire");
  $res=$this->dao->select()->fetchAll(PDO::FETCH_ASSOC);
  }
  else
  {
     $this->dao->setTable("livre");
     $list_livres=$this->dao->select()->fetchAll(PDO::FETCH_ASSOC);;
     $this->dao->setTable("dictionnaire");
     $list_dico=$this->dao->select()->fetchAll(PDO::FETCH_ASSOC);;    
     $res=array("livres"=>$list_livres, "dictionnaires"=>$list_dico);
  }

  return $res;    
} 

//fournir le nombre de documents (livres, dictionnaires ou les deux);  
}
