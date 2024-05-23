<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Byte Solidário</title>
</head>
<body>
    <header>
        <div class="area-cabecalho">
            <div id="area-logo">
                <h1><span>S O F T - C O M P</span></h1>
            </div>

            <div id="area-menu">
                <a href="">Início</a>
                <a href="cadastro.php">Cadastro</a>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="area-principal">
                <h2>BYTE Solidário</h2>
                <h4>Desenvolvimento Web FullStack</h4>
                <img src="../img/caecomp.webp" alt="">
            </div>

            <div class="area-login">
                <h2>LOGIN</h2>
                <form class="formulario" method="POST" action="login.php">
                    <input class="inputs" type="text" name="login" placeholder="Login" required>
                    <input class="inputs" type="password" name="senha" placeholder="Senha" required>

                    <div class="botoes">
                        <button class="botao_entrar">Entrar</button>
                        <a class="botao_cadastrar" href="">Cadastrar</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
