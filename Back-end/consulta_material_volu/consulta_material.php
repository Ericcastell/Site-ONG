<?php
    // Consulta as tarefas enviadas pelo voluntario
    include "conecta_banco_consult.php";
    echo "<table border=1>";
    echo "<tr>";
    echo "<td>materia</td>";
    echo "<td>conteudo</td>";
    echo "<td>formato</td>";
    echo "<td>autor</td>";    
    echo "<tr>";   
    //Conectando ao Banco de Dados
    $strcon = mysqli_connect('')
    $sql = "SELECT Materia, Conteudo, Formato, Feita_por FROM grandes_altitudes.material_feito "
    $resultado =mysqli_query($strcon,$sql) or die("Erro ao tentar consultar")
    
    while ($registro = mysqli_fetch_array($resultado))
        $materia = $registro['materia'];
        $conteudo = $registro['conteudo'];
        $formato = $registro['formato'];
        $autor = $registro['autor'];
        echo "<tr>";
        echo "<td>materia</td>";
        echo "<td>conteudo</td>";
        echo "<td>formato</td>";
        echo "<td>autor</td>";    
        echo "<tr>";
    mysqli_close($strcon);
    echo "</table>";    
?>