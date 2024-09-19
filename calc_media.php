<?php
    session_start();

        $media_final = '';
        $frase = '';

        $num_1 = $_POST['num_1'];
        $num_2 = $_POST['num_2'];
        $num_3 = $_POST['num_3'];
        $num_4 = $_POST['num_4'];

        $media_final = ($num_1 + $num_2 + $num_3 + $num_4)/4;

        if($media_final >= 9){
            $frase = "Aprovado com Louvor!";
        } elseif ($media_final >= 7 && $media_final < 9) {
            $frase = "Aluno Aprovado";
        } elseif ($media_final >= 4 && $media_final < 7){
            $frase = "Recuperação, sua chance de passar!";
        } else {
            $frase = "Poxa vida, vamos tentar novamente ano que vem!";
        }
        
        $_SESSION['media_final'] = $media_final;
        $_SESSION['frase'] = $frase;

    header('Location: index.php');
    exit;
 ?>