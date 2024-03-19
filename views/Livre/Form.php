
<?php
$url="../insert";
if($action=="edit")
$url="../../update/".$infos_adresse[2];
?>
<center>
    <form action="livre/<?=$url?>" method="post">
     <table>
        <tr>   
            <td>Code</td>
            <td><input type="text" name="code" value="<?=$livre[1]?>"></td>
        </tr>
        <tr>
            <td>Titre</td>
            <td><input type="text" name="titre" value="<?=$livre[2]?>"></td>
        </tr>
        <tr>
            <td>Auteur</td>
            <td><input type="text" name="auteur" value="<?=$livre[3]?>"></td>
        </tr>
        <tr>
            <td>Nbr de pages</td>
            <td><input type="number" name="nbr_pages" value="<?=$livre[4]?>"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Envoyer"></td>
            <td><input type="reset" value="Annuler"></td>
        </tr>
     </table> 
    
    </form>
</center>


