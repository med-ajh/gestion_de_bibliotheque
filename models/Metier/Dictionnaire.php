<?php
include_once 'Document.php';
class Dictionnaire extends Document{
 
private $nbr_def_mots;

public function __construct($id=null, $code=null,$titre=null, $ndm=null) {
    parent::__construct($id,$code,$titre);    
    $this->nbr_def_mots=$ndm;
}

public function getNbr_def_mots() {
    return $this->nbr_def_mots;
}

public function setNbr_def_mots($nbr_def_mots) {
    $this->nbr_def_mots = $nbr_def_mots;
}


}
