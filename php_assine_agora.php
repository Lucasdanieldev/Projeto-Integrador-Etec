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

.teste2{
background-color:#245b86;
height:320px;
width:580px;
margin-top:150px;
font-size: 25px;
border-radius: 10px;
color: #ffffff;

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
  p{
	  padding-top: 30px;
	  font-size: 35px;
  }
  .a {
	  padding-right: 220px;
  }
.b{
	padding-bottom: 20px;
}
.r{
	padding-left: 50px;
}
</style>
</head>
<body>
<a href="pagina inicial.html"><img class="imagem" src="logotipo/logotipo vdd.jpeg" width="170px" height="100px"></a>
<center>
<?php
session_start();
$_SESSION["CPF"]=$_POST["cpf"];
$_SESSION["Nome"]=$_POST["nome"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["password"]=$_POST["senha"];
$_SESSION["pagamento"]=$_POST["pagamento"];
$_POST["vencimento"];
$_POST["cartao"];
$valor=25.00;
if (($_SESSION["CPF"]=="")|| ($_SESSION["Nome"]=="") ||($_SESSION["email"]=="") || ($_SESSION["password"]=="")|| ($_POST["vencimento"]=="")||($_POST["cartao"]=="")){
echo "<div class='teste'>";
echo "Tente Novamente<br>";
echo "<div class=link><a href='assine_agora.html'>Voltar</a></div><br>";
echo "</div>";
}

else{
echo"<div class='teste2'>";
echo "<p>Obrigado ".$_SESSION['Nome']."<br> por fazer parte do SSFilms</p>";
echo"<div class='b'><div class= 'a'>CPF: ". $_SESSION['CPF']."</div>";
echo"<div class='r'>Email: ". $_SESSION['email']."<br/></div>";
switch($_SESSION["pagamento"]){
case 1: echo "O valor do SSFilms será  R$ ".$valor."<br/>"; break;
case 2: echo "O valor do SSFilms será R$ ".($valor+($valor*3/100))."<br/>"; break;
case 3: echo "O valor do SSFilms será R$ ".($valor+($valor*5/100))."<br/>"; break;
echo "<div class=link><a href='login.html'>Voltar</a></div><br>";
echo"</div></div>";

}
}

?>
</div>
</center>
</body>
</html>