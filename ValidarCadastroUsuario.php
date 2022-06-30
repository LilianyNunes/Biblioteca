<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
?>
<html>
<head>
<title> Cadastro de Usuários </title>
</head>
<body>
<h1><font color="green">Cadastro de Usuários</font></h1>
<form method="post" action="">
<table>
<tr>
<td><input name="adm" type="hidden" value = "123@56"></td>
</tr>
<tr>
<td>Senha do Administrador:</td>
<td><input name="senhaadm" size = "8" type="password"></td>
</tr>
</table>
<br>
<button type="submit" name="Confirmar" style="background-color:green; color: white"> Confirmar </button>
<button type="submit" name="Voltar" style="background-color:green; color: white"> Voltar </button>
 </form>
 </body>
</html>
<?php
 if (isset($_POST['Confirmar'])):
 include "Conexao.php";

 session_start();
 $Usuario = $_SESSION['user'];
 $Senha = $_SESSION['senha'];

 $adm=$_POST['adm'];
 $senhaadm=$_POST['senhaadm'];
 if ($senhaadm == $adm)
 {
 $sql=mysqli_query($Conexao, "INSERT INTO login(Usuario, Senha) VALUES('$Usuario', '$Senha')");
 if ($sql==true)
 {
     echo "<span style='color:green;'>Usuário cadastrado com sucesso!</span>";
 }
 else
 {
     echo "<span style='color:green;'>Error: Cadastro de usuário cancelado! = </span>";
 }
 echo "<a href=biblioteca.php><span style='background-color:green; color:white'> VOLTAR </a></span>";
 }
 else
 {
     echo "<span style='color:red;'>Você não tem Permissão para o Cadastro!</span>";
     return 0;
 }
 endif;
 
 if (isset($_POST['Voltar'])):
 header("Location:biblioteca.php");
 endif;
 ?>