<html>
<head>
<meta charset="utf-8">
<title>SSFilms</title>
<style type="text/css">
body{
background-color:#000000;
font-size:25px;
font-family:Monospace;
background-image: url(logotipo/background.jpg);
}
.teste{
background-color:#245b86;
height:150px;
width:395px;
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
	font-size: 19px;
	text-align: center;

}
.link a {
	text-decoration: none;
	color: #000000;}
</style>
<body>
<a href="pagina inicial.html"><img class="imagem" src="logotipo/logotipo vdd.jpeg" width="170px" height="100px"></a>
<center>
<div class="teste">
<?php
$new=$_POST["email"];
$old=$_POST["senha"];
if(($new=="")|| ($old==""))
{
echo"Tente novamente <br/>";
echo "<div class=link><a href='senha.html'>Voltar</a></div>";
}
else{
echo "Senha alterada com sucesso<br>";
echo "<div class=link><a  href='login.html'>Voltar </a></div>";
}
?>
</div>
</center>
</body>
</html>