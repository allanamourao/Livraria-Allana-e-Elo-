<!-- Entrada de dados -->
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Página Dourada</title>
     <link rel="icon" type="image/x-icon" href="chapeu.png">
 </head>
 <body style="
    background-image: linear-gradient(to bottom, #080808, #9723f5);
    background-attachment: fixed;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    margin: 0;">
    <header>
        <h2 style="color: #ffffff; text-align: center;">
            Seja Bem Vindo a Página Dourada!</h2>
    </header>
    <main style="color: #fffdfc">
        <form action="livrariaController.php" method="post" style="
        background: linear-gradient(135deg, #bf953f 0%, #fcf6ba 25%, #b38728 50%, #fbf5b7 75%, #aa771c 100%);
        width: 450px;
         padding: 30px;
        border-radius: 15px;
        box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);">
            <h2 style="color: #ffffffff">Faça seu Cadastro</h2>
            <label for="nome" style="font-size: 20px;">Nome</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome..." >
            <br><br>
            <label for="idade" style="font-size: 20px;">Idade:</label><br>
            <input type="number" id="idade" name="idade">
            <br><br>
            <label for="email" style="font-size: 20px;">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Digite seu email...">
            <br><br>
            <label for="genero" style="font-size: 20px;">Gênero Favorito</label><br>
            <input type="text" id="genero" name="genero" placeholder="Digite seu gênero favorito">
            <br><br>
            <label for="senha" style="font-size: 20px;">Senha</label><br>
            <input type="password" id="senha" name="senha" placeholder="Digite sua senha...">
            <br><br>
            <button type="submit">Cadastrar</button>
        </form>
    </main>
    <img src="gato.png" style=" position: absolute; left: 150px; top: 250px; width: 300px; ">
    
 </body>
 </html>