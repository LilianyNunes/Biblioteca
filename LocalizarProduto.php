<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
include "Conexao.php";
$ISBN = $_POST['ISBN'];
$sql=mysqli_query($conexao, "SELECT * FROM cad_produtos WHERE ISBN LIKE ".$ISBN);
$row = mysqli_num_rows($sql);
if ($row == 0)
{
    echo "ISBN nao encontrado...";
    return 0;
}
else
{
    while ($l=mysqli_fetch_array($sql))
    {
        $ISBN = $l['ISBN'];
        $Titulo = $l['Titulo'];
        $Autor = $l['Autor'];
        $Num_Edicao = $l['Num_Edicao'];
        $Editora = $l['Editora'];
        $Local_Pub = $l['Local_Pub'];
        $Data_Pub = $l['Data_Pub'];
        $Num_Pag = $l['Num_Pag'];
    }
}
?>

<html>
<head>
<title> EDITAR </title>
</head>
<body>
 <h1><font color="green">E D I T A R P R O D U T O S</font></h1>
 <form method="post" action="ValidarAlteracao.php">
 <table>
<tr>
<td>ISBN:</td>
<td><input name="ISBN" autocomplete="off" value="<?php echo $ISBN;?>"></td>
</tr>
<tr>
<td>Titulo:</td>
<td><input name="Titulo" size = "30" autocomplete="off" value="<?php echo $Titulo;?>"></td>
</tr>
<tr>
<td>Autor:</td>
<td><input name="Autor" size = "20" autocomplete="off" value="<?php echo $Autor;?>"></td>
</tr>
<tr>
<td>Num_Edicao:</td>
<td><input name="Num_Edicao" size = "20" autocomplete="off" value="<?php echo $Num_Edicao;?>"></td>
</tr>
<tr>
<td>Editora:</td>
<td><input name="Editora" size = "20" autocomplete="off" value="<?php echo $Editora;?>"></td>
</tr>
<tr>
<td>Local_Pub:</td>
<td><input name="Local_Pub" size = "20" autocomplete="off" value="<?php echo $Local_Pub;?>"></td>
</tr>
<tr>
<td>Data_Pub:</td>
<td><input name="Data_Pub" size = "20" autocomplete="off" value="<?php echo $Data_Pub;?>"></td>
</tr>
<tr>
<td>Num_Pag:</td>
<td><input name="Num_Pag" size = "20" autocomplete="off" value="<?php echo $Num_Pag;?>"></td>
</tr>
</table>
 <input type="submit" value="Confirmar" style="background-color:red; color: white">
 <a href="FormularioPrincipal.php" style='background-color:green; color:white'> VOLTAR </a>
 </form>
 </body>
</html>