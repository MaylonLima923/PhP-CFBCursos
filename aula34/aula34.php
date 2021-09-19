<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 34 </title>
</head>
<body>
    <table border="1">
        <tr> 
            <td>Código</td><td>Produto</td><td>Preço</td><td>Quantidade</td>
        </tr>

        <?php
            include '../conecta.php';

            $sql = "SELECT * FROM tb_produtos WHERE cod LIKE 'M%'";
            
            $res = mysqli_query($conn,$sql);

            while ($vreg = mysqli_fetch_row($res)) {
                $vcod = $vreg[0];
                $vprod = $vreg[1];
                $vpreco = $vreg[2];
                $vqtd = $vreg[3];

                echo "<tr><td>$vcod</td><td>$vprod</td><td>$vpreco</td><td>$vqtd</td></tr>";
            }
            
            mysqli_close($conn);
        ?>
    </table>
</body>
</html>
