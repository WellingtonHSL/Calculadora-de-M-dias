<?php
        $media_final = '';
        $frase = '';
        $conceito = '';

        $num_1 = $_POST['num_1'];
        $num_2 = $_POST['num_2'];
        $num_3 = $_POST['num_3'];
        $num_4 = $_POST['num_4'];

        $media_final = ($num_1 + $num_2 + $num_3 + $num_4)/4;

        if($media_final >= 9){
            $frase = "Aprovado com Louvor!";
            $conceito = "A";
        } elseif ($media_final >= 7 && $media_final < 9) {
            $frase = "Aluno Aprovado";
            $conceito = "B";
        } elseif ($media_final >= 4 && $media_final < 7){
            $frase = "Recuperação, sua chance de passar!";
            $conceito = "C";
        } else {
            $frase = "Poxa vida, vamos tentar novamente ano que vem!";
            $conceito = "D";
        }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            text-align: center;
        }
    </style>
    <title>Calculadora</title>
</head>
    <body>
        <h3>Média Final: <?php echo htmlspecialchars($media_final)?></h3>
        <p>Conceito: <?php echo htmlspecialchars($conceito)?></p>
        <p><?php echo htmlspecialchars($frase)?></p>

        <?php
        if ($media_final >= 4 && $media_final < 7){
            echo '
            <div class="container_form">
                <form method="post" action="calc_media_rec.php">
                    <br>
                    <div class="input-group input-group-lg">
                        <span class="input-group-text" id="num_5">Recuperação</span>
                        <input type="number" name="num_5" id="num_5" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                    </div>
                    <br>
                    <input type="hidden" name="media_final" value="' . htmlspecialchars($media_final) . '">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>';
        }
        ?>
    </body>
</html>
