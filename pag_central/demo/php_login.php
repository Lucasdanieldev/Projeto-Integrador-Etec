
<?php

$email=$_POST['Email'];
$senha=$_POST['Senha'];

if ($senha!="123456") {
	echo "Senha Válida";
}
else 
	if (($senha=="") || ($Email=="")) {
 echo "Atenção! Todos os campos do formulario devem ser preenchidos, clique em voltar";
	}

?>

<?php
$email=$_POST["Email"];
$senha=$_POST["Senha"];
if(($email=="")|| ($senha==""))
{
echo"Tente novamente <br/>";
echo "<a href='senha.html'>Voltar</a>";
}
else{
header('Location:login.html');
}
?>



