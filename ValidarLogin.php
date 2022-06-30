<html>
<head>
<title> Validar Login </title>
</head>
<body>
<?php 
 include "Conexao.php";
 $user=$_POST['user'];
 $senha=$_POST['senha'];

$sql = mysqli_query($conexao,"SELECT * FROM login WHERE Usuario='$user' AND Senha='$senha'");
$row = mysqli_num_rows($sql);
 
 if ($row > 0)
 {
     header("Location:FormularioPrincipal.php");
 }
 else
 {
 echo "Erro no login<br/>";
 echo "<a href='biblioteca.php'>Voltar</a>";
}
?>
</body>
</html>