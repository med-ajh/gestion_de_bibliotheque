<?php

abstract class Document {
    private $id,$code, $titre;
    
    public function __construct($id=null, $code=null, $titre=null) {
        $this->id = $id;
        $this->code = $code;
        $this->titre = $titre;
    }

    public function getId() {
        return $this->id;
    }

    public function getCode() {
        return $this->code;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCode($code) {
        $this->code = $code;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }


    
}
