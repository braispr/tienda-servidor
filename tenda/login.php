
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Usuario:<input type="text" name="usuario"><br><br>
    Contrasinal:<input type="text" name="contrasinal"><br><br>
    <input type="submit" name="entrar" value="Entrar">
</form>


<?php
    include "config.php";
    $productosFich = array();
    if (file_exists(FICHEIRO_PRODUTOS)){
        $productosFich = json_decode(file_get_contents(FICHEIRO_PRODUTOS), true);
        echo "<table>";
        echo "<tr>";
        echo"<td>Codigo</td>";
        echo"<td>Nome</td>";
        echo"<td>PVP</td>";
        echo "</tr>";
        foreach ($productosFich as $producto) {
            echo "<tr>";
            echo"<td>".$producto['cod']."</td>";
            echo"<td>".$producto['nome_corto']."</td>";
            echo"<td>".$producto['PVP']." €</td>";
            echo "</tr>";
        }
        echo '</table>';
    }else {
        $mensaxe = "Non hai productos";
    }
    if (isset($_POST['entrar'])){
        
    }
?>