<?php
    session_start();

        $media_final = $_SESSION['media_final'];
        $media_final_rec = '';
        $frase_rec = '';

        $num_5 = (float) $_POST['num_5'];

        $media_final_rec = ($num_5 + $media_final)/2;

        if($media_final_rec >= 7){
            $frase_rec = "Aluno Aprovado!";
        } else{
            $frase_rec = "Poxa vida, vamos tentar novamente ano que vem!";
        }

        $_SESSION['media_final_rec'] = $media_final_rec;
        $_SESSION['frase_rec'] = $frase_rec;

    header('Location: index.php');
    exit;
?>