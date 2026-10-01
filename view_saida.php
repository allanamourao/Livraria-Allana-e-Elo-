<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório - Página Dourada</title>
</head>

<body style="
    background-image: linear-gradient(to bottom, #080808, #9723f5);
    background-attachment: fixed;
    color: white;
    font-family: Arial, sans-serif;
">

    <form style="
        width: 600px;
        margin: 50px auto;
        padding: 30px;
        border-radius: 15px;
        background: linear-gradient(135deg,
        #bf953f 0%,
        #fcf6ba 25%,
        #b38728 50%,
        #fbf5b7 75%,
        #aa771c 100%);
        color: black;
    ">

        <h1 style="text-align:center;">
            ✨ Relatório do Leitor ✨
        </h1>

        <hr>

        <p><strong>Nome:</strong> <?= $nome ?></p>

        <p><strong>Email:</strong> <?= $email ?></p>

        <p><strong>Idade:</strong> <?= $idade ?> anos</p>

        <p><strong>Categoria:</strong> <?= $categoria ?></p>

        <p><strong>Gênero Favorito:</strong> <?= $genero ?></p>

        <p><strong>Livro Recomendado:</strong>
            <?= $livroRecomendado ?>
        </p>

        <?php if($idade < 18){ ?>

            <h3>
                Você está cadastrado como Leitor Jovem!
            </h3>

        <?php } else { ?>

            <h3>
                Você está cadastrado como Leitor Adulto!
            </h3>

        <?php } ?>
            <a href="loja.php">Ir para a Nossa Loja</a>
        </form>
        
</body>
</html>