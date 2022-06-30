<?php
header("Content-Type: text/html; charset=ISO-8859-1", true);
include "Conexao.php";
$ISBN = $_POST['ISBN'];
$Titulo = $_POST['Titulo'];
$Autor = $_POST['Autor'];
$Num_Edicao = $_POST['Num_Edicao'];
$Editora = $_POST['Editora'];
$Local_Pub = $_POST['Local_Pub'];
$Data_Pub = $_POST['Data_Pub'];
$Num_Pag = $_POST['Num_Pag'];

$sql = mysqli_query($conexao, "UPDATE cad_produtos SET Titulo='$Titulo', Autor='$Autor', Num_Edicao='$Num_Edicao', Editora='$Editora',
Local_Pub='$Local_Pub', Data_Pub='$Data_Pub', Num_Pag='$Num_Pag' WHERE ISBN='$ISBN'");
if ($sql==true)
{
    echo "<span style='color:green;'>Aleração efetuada com sucesso!</span>";
}
else
{
    echo "<span style='color:green;'>Error: Alteração cancelado! = </span>";
}
echo "<a href=FormularioPrincipal.php><span style='background-color:green; color:white'> VOLTAR </a></span>";
?>