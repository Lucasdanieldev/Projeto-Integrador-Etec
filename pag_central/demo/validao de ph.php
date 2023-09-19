
<?php

$email=$_POST['Email'];
$senha=$_POST['Senha'];

if ($senha!="12345678") {
echo"qualquer coisa ";
}
else 
	if (($senha=="") || ($Email=="")) {
 echo "Atenção! Todos os campos do formulario devem ser preenchidos, clique em voltar";
 header('Location:pag_central .html');
	}

?>

