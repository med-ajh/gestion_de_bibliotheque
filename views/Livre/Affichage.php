<?php
include_once __DIR__.'/../../Metier/Biblio.php';
$B=new Biblio("biblio");
$res=$B->Lister(new Livre());
?>
<center>
    <a href="./"> >>Menu principal  </a>
    <h1>La liste de livres</h1>
    <table border="1" width="480">
        <tr>
            <th>ID</th>
            <th>Code</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Nbr de pages</th>
            <th colspan="2"><a href="livre/new">>> Ajouter</a></th>
        </tr>
<?php
foreach($res as $livre)
{
?>
        <tr>
            <td><?=$livre['id']?></td>
            <td><?=$livre['code']?></td>
            <td><?=$livre['titre']?></td>
            <td><?=$livre['auteur']?></td>
            <td><?=$livre['nbr_pages']?></td>
            <td><a href="livre/edit/<?=$livre['id']?>">Edit</a></td>
            <td><a href="livre/delete/<?=$livre['id']?>">Delete</a></td>
        </tr>
<?php
}
?>
    </table>
</center>


