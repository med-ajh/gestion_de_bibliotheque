<?php
class DAO extends PDO {
private $table;
public function __construct($dsn,$user,$pass) {
parent::__construct($dsn, $user, $pass);
}

public function getTable() {
    return $this->table;
}

public function setTable($table) {
    $this->table = $table;
}

public function insert($data) {// $data est un tableau associatif
    $req="insert into ".$this->table." (";
    $keys=$values="";
    foreach ($data as $key=>$value)
    {
        $keys.=$key.',';
        $values.="?,";
    } 
    $keys= substr($keys,0,-1);
    $values=substr($values,0,-1);
        $req.=$keys.') values ('.$values.')';
    $stm=parent::prepare($req);
    return $stm->execute(array_values($data));
    //array_values permet de convertir un tableau associatif en un tableau indexé
    }
    public function update($data) {
    $req="update ".$this->table." set ";
    $critere=" where id=:id";
    foreach($data as $key=>$value)
    if($key!='id')
     $req.=$key."=:$key,";
    $req= substr($req, 0,-1);
    $req.=$critere;
    $stm=parent::prepare($req);
    return $stm->execute($data);
    }
    public function delete($id) {
    $req="delete from ".$this->table." where id=?";
    $stm=parent::prepare($req);
    return $stm->execute([$id]);
    }
    public function select($id=null) {
    $req="select * from ".$this->table;
    $stm=parent::prepare($req);
    if($id!=null)
    {
    $req.=" where id=?";
    $stm=parent::prepare($req);
     $stm->execute([$id]);
     return $stm;
    }
     $stm->execute();
     return $stm;
    }
    }