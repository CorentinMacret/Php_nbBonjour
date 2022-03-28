<html>
<form id="formulaire" action="nbonjour.php">
<div >
     <label for="nb">nombre de bonjour</label>
    <div class="form-field">
    <input name="nb" type="text" id="nb" placeholder="votre nombre">
    <button type="search" id="nb">Afficher</button>
</div>
</form>
<BR>
</html>

<?php
echo "Bonjour Tout le monde ! \r" ."<BR>"; ?> <!-- afficher ce message -->

<?php
if(isset($_GET['nb'])){


$max = 	$name_field = $_GET['nb'];
;
for ($i = 0; $i < $max; $i++)
{
echo "<BR>" . "Bonjour numéro $i \n\r" ."<BR>";
}
}
?>
