<?php include ('assets/linguagens.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" href = "css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Linguagens mais Utilizadas</title>
</head>

<body>
    
    <h2 align="center"> Linguagens mais Utilizadas </h2>
 
    <div id="Tabela">
        <center><table border ="3">
     
            <td> Linguagens
                <a href='?tipo=nome&ordem=asc'>&#8679;</a>
                <a href='?tipo=nome&ordem=desc'>&#8681;</a>
            </td>

            <td> Porcentagem de Uso
                <a href='?tipo=sigla&ordem=asc'>&#8679;</a>
                <a href='?tipo=sigla&ordem=desc'>&#8681;</a>
            </td>

            <?php 
                foreach($lingua as $nome => $sigla) {
                    echo '<tr><td>'.$nome.'</td>';
                    echo '<td>'.$sigla.'</td></tr>'; 
                }
            ?>
    
        </table>
    </div>
</body>
</html>