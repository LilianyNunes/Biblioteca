<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
?>
<html>
<head>
<title> Login </title>
</head>
<body>
<h1><font color="green">BIBLIOTECA</font></h1>
<form method="post" action="ValidarLogin.php">
<table>
<tr>
<td>Usuario:</td>
<td><input name="user" size = "15" type="text" autocomplete="off"></td>
</tr>
<tr>
<td>Senha:</td>
<td><input name="senha" size = "8" type="password"></td>
</tr>
</table>
 <br>
<button type="submit" name="Logar" style="background-color:green; color: white"> Logar </button>
<button type="submit" name="Cad_usuario" style="background-color:green; color: white"> Cadastrar Usuario </button>
</form>
</body>
</html>

<?php
 if (isset($_POST['logar'])):
 include "Validarlogin.php";
 endif;
 if (isset($_POST['Cad_usuario'])):
 $user=$_POST['user'];
 $senha=$_POST['senha'];
 if ($user != "" && $senha != "")
 {
 session_start();
 $_SESSION['user'] = $user;
 $_SESSION['senha'] = $senha;
 header("Location:ValidarCadastroUsuario.php");
 }
 else
 {
 echo "<span style='color:red;'>Usu�rio e Senha informado incorretamente!</span>";
 return 0;
 }
 endif;
?>
