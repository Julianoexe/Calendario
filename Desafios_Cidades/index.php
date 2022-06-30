<?php include ('assets/cidade.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href = "css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melhores Cidades para Morar</title>
</head>

<body>
    
    <h2 align="center"> As Melhores Cidades Brasileiras para se morar </h2>
 
    <div id="Tabela">
        <center><table border ="1">
     
            <td> Cidades e Estados
                <a href='?tipo=nome&ordem=asc'>&#8679;</a>
                <a href='?tipo=nome&ordem=desc'>&#8681;</a>
            </td>

            <td> IDHM
                <a href='?tipo=sigla&ordem=asc'>&#8679;</a>
                <a href='?tipo=sigla&ordem=desc'>&#8681;</a>
            </td>

            <?php 
                foreach($cidades as $nome => $sigla) {
                    echo '<tr><td>'.$nome.'</td>';
                    echo '<td>'.$sigla.'</td></tr>'; 
                }
            ?>
    
        </table>
    </div>
</body>
</html>