<?php

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$mail=$_POST['mail'];
$mot_de_passe=$_POST['mot_de_passe'];
$retype=$_POST['retype'];

$con=mysqli_connect("localhost","root","") or die("erreur : il y a une erreur lors de connexion au serveur");
$db=mysqli_select_db($con,"profile_data") or die ("erreur : on ne peut pas connecter a la base de donnée");

$remplir="insert into registration values ('$nom','$prenom','$mail','$mot_de_passe','$retype')";
$result=mysqli_query($con,$remplir);
if ($result)
{
    echo "<h1>Votre compte est crée avec succée ! </h1>";
    echo "<a href ='sign in formulaire.html'>Appuyer ici pour se conncté a votre compte </a>"; 
}
else 
{
    echo "Error : ".mysqli_errno($con);
}

?>