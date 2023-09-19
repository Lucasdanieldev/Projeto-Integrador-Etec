<html>
<head>
<meta charset="utf-8">
<title>SSFilms</title>
<style type="text/css">
body{
background-color:#000000;
background-image: url(logotipo/background.jpg);
font-size:25px;
font-family:Monospace;
}
.teste{
background-color:#245b86;
height:150px;
width:280px;
margin-top:250px;
border-radius: 10px;
color: #ffffff;
padding-top: 70px;
}
.imagem{
 position: absolute;
 height:40px;
 width:150px;
top: 10px;
left: 20px;
}
strong{
	font-size:25px;
}
.link{
	width: 150px;
	padding-left: 10px;
	height: 25px;
	border: 1px solid #ccc;
	outline: none;
	display: block;
	background-color: #ffffff;
	position: center;
	color: #000000;
	border-radius: 10px;
	margin-top: 10px;
	text-align: center;
	font-size: 19px;
}
.link a {
	text-decoration: none;
	color: #000000;
}
</style>
<body>
<a href="pagina inicial.html"><img class="imagem" src="logotipo/logotipo vdd.jpeg" width="170px" height="100px"></a>
<center>

<?php
$senha=$_POST["senha"];
$email=$_POST["email"];
if(($senha=="")||($email=="") || ($senha!="12345678"))
{
echo"<div class='teste'>Tente novamente<br>";
echo"<div class=link><a href='login.html'>Voltar</a></div></div>";
}
else{
header('Location:pag_central/demo/pag_central.html');
}
?>

</center>
</body>
</html>