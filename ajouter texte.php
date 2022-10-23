<?php
$roman=$_POST['t'];
$type_select=$_POST['type_select'];

$con=mysqli_connect("localhost","root","") or die("erreur : il y a une erreur lors de connexion au serveur");
$db=mysqli_select_db($con,"profile_data") or die ("erreur : on ne peut pas connecter a la base de donnée");

$remplir="insert into texte values('$roman','$type_select')";  
$result =mysqli_query($con,$remplir);

if ($result){
    echo "<h1>votre roman a été ajouter avec sucée</h1>";
    echo "<a href ='choisir.html'>Appuyer ici pour revcenir au page d accueil </a>";
}
else
{
    echo "il y a une erreur lors de l'insertoion de votre roman ";
}

?>