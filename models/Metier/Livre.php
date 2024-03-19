<?php
include_once 'Document.php';
class Livre extends Document{
 private $auteur, $nbr_pages;   

 public function __construct($id=null,$code=null,$titre=null,$auteur=null,$nbr_pages=null) {     
     parent::__construct($id,$code,$titre);
     $this->auteur=$auteur;
     $this->nbr_pages=$nbr_pages;
 }
 
 public function getAuteur() {
     return $this->auteur;
 }

 public function getNbr_pages() {
     return $this->nbr_pages;
 }

 public function setAuteur($auteur) {
     $this->auteur = $auteur;
 }

 public function setNbr_pages($nbr_pages) {
     $this->nbr_pages = $nbr_pages;
 }


}
