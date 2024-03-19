<?php

include_once 'Biblio.php';
$B=new Biblio("biblio");
//$B->Modifier(new Livre(1, "c012", "PHP_MVC","RASMUS",240));
$B->Lister();

