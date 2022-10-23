<?php
$mail_log=$_POST['mail_log'];
$pass_log=$_POST['pass_log'];

$con=mysqli_connect("localhost","root","") or die("erreur : il y a une erreur lors de connexion au serveur");
$db=mysqli_select_db($con,"profile_data") or die ("erreur : on ne peut pas connecter a la base de donnée");

$login = "select mail,mdp from registration where mail = '$mail_log' and mdp = '$pass_log'";
$result=mysqli_query($con,$login);
$count=mysqli_num_rows($result);
if ($count == TRUE)
{
    header('location:choisir.html');
}
else
{
    echo "adress mail ou mot de passe non valide !";
}


?>