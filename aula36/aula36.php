<html>
<head>
 <title>Aula 36</title>
 <meta charset="utf-8"/>
</head>
<body>
<form name="f_excluir" method="post" action="aula36.php">
 
<table border="3">

 <tr><td>Codigo</td><td>Nome</td><td>Selecionar</td></tr>

<?php 
    include "../conecta.php";

    $sql = "SELECT * FROM tb_cadastro ORDER BY cod";
    $res = mysqli_query($conn, $sql);

    while ($vreg = mysqli_fetch_row($res)) {
        $vcod = $vreg[0];
        $vnome = $vreg[1];

        echo "<tr>";
        echo "<td>$vcod</td> <td>$vnome</td>";
        echo "<td> <input type='checkbox' value='$vcod' name='sel[]'> </td>";
        echo "</tr>";
    }

    mysqli_close($conn);
?>

</table>

<br/><input type="submit" value="Excluir" name="bt_excluir">


 </form>
</body>
</html>