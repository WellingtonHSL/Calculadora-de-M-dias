<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <header>
        <h1>Calculadora de Médias</h1>
    </header>
    <body>
        <fieldset>
        <?php
                $media_final = $_POST['media_final'];
                $media_final_rec = '';
                $frase_rec = '';

                $num_5 = (float) $_POST['num_5'];

                $media_final_rec = ($num_5 + $media_final);

                if($media_final_rec >= 10){
                    $frase_rec = "Aluno Aprovado!";
                } else{
                    $frase_rec = "Poxa vida, vamos tentar novamente ano que vem!";
                }
        ?>
                <h3>Média Final Recuperação: <?php echo htmlspecialchars($media_final_rec)?></h3>
                <p><?php echo htmlspecialchars($frase_rec)?></p>
        </fieldset>
    </body>
</html>
