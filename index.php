<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style type="text/css">
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    background-color: #000000;
    width: 100%;
    height: 70px;
    color: #FFFFFF;
    font-size: 32px;
    font-weight: bold;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

header h1 {
    text-align: center;
}

body {
    background-color: #202020;
    font-family: 'Arial', sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

main {
    width: 100%;
    max-width: 450px;
    margin-top: 0.5%;
}

.container_form {
    background-color: #FFFFFF;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
    display: flex;
    flex-direction: column;
    gap: 15px;
}
    </style>

    <title>Calculadora</title>
</head>
<body>
    <header>
        <h1>Calculadora de Médias</h1>
    </header>

    <main>
        <div class="container_form">
            <form method="post" action="calc_media.php">
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="num_1">Primeira Média</span>
                    <input type="text" name="num_1" id="num_1" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                </div>
                <br>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="num_2">Segunda Média</span>
                    <input type="text" name="num_2" id="num_2" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                </div>
                <br>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="num_3">Terceira Média</span>
                    <input type="text" name="num_3" id="num_3" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                </div>
                <br>
                <div class="input-group input-group-lg">
                    <span class="input-group-text" id="num_4">Quarta Média</span>
                    <input type="text" name="num_4" id="num_4" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </main>
</body>
</html>
