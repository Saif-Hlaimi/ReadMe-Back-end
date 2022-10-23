<?php

$tal=$_POST['type_select'];

$con=mysqli_connect("localhost","root","") or die("erreur : il y a une erreur lors de connexion au serveur");
$db=mysqli_select_db($con,"profile_data") or die ("erreur : on ne peut pas connecter a la base de donnée");

$sql="SELECT roman from texte where type_r='$tal'";
$result = mysqli_query($con,$sql);
$resultat=mysqli_num_rows($result);
$x=1;
if ($resultat > 0 )
{ echo "<h1> voici les romans trouvés </h1>";
    while($row = mysqli_fetch_assoc($result))
    {
        echo"Roman numero".strval($x)." : ";
        echo"<br>";
        echo $row['roman'];
        $x++;
        echo"<br>";
        echo"<br>";
 
    }

}
else
{
    echo "<h1>desole , il n y a pas des romans de ce type</h1> " ;
}
?>


<style>

body {
    background-image: linear-gradient(rgba(0, 0, 0, 0.527), rgba(0, 0, 0, 0.5)), url("13.jpg");
    background-size: cover;
    font-size: 22px;
    font-style: italic;
    color: white;
    }
</style>
