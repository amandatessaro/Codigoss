<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container flex centro fundo">
        <div class="quadrado-login flex centro">
            <div class="quadrado flex centro coluna letra cor">
                <h1> Realize o seu login! </h1>
                <br>
                <br>
                <br>
                <div class="flex coluna">
                    <div class="input-group">
                        <input type="email" placeholder=" " class="acessar espaco" name="email" required>
                        <label>Email</label>
                    </div>
                    <br>
                    <div class="input-group">
                        <input type="password" placeholder=" " class="acessar espaco" name="senha" required>
                        <label>Senha</label>
                    </div>
                </div>
                <br>
                <button class="botaoo" role="button" onclick="login()"> Entrar no sistema </button>
            </div>
        

        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>
