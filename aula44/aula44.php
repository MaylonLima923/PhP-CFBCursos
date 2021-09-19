<?php
    include "../conecta.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 44</title>
    <link rel="stylesheet" href="aula44.css">
</head>
<body>

    <h1> Pesquisa </h1>
    <form name="fcad" method="get" action="aula44b.php">
        <label>Nome</label> <br>
        <input type="text" name="fnome"> <br> <br>

        <label>Selecione seu estado</label> <br>
        <select name="fuf">
            <?php
                $sql = "SELECT * FROM tb_uf ORDER BY uf";
                $res = mysqli_query($conn, $sql);
                    while($vreg = mysqli_fetch_row($res)) {
                        $vuf = $vreg[0];
                        $vsigla = $vreg[1];

                        echo "<option value='$vsigla'>$vuf</option>";
                    }
            ?>
        </select> <br> <br>

        <label>Selecione seus meios de transporte favorito</label> <br>
        <?php
            $sql = "SELECT * FROM transportes";
            $res = mysqli_query($conn, $sql);

            while ($vreg = mysqli_fetch_row($res)) {
                $vcod = $vreg[0];
                $vtransporte = $vreg[1];

                echo "<input type='checkbox' name='ftransp[]' value='$vcod'> $vtransporte <br>";
            }
        ?> <br> <br>
        <input type="submit" value="Gravar Pesquisa">
    </form>
</body>
</html>

<?php
    mysqli_close($conn);
?>