
 <?php
// Função para recomendar livro
function recomendarLivro($genero){

    $recomendacoes = [

        "Fantasia" => "Harry Potter",
        "Romance" => "Orgulho e Preconceito",
        "Terror" => "Drácula",
        "Ficçao" => "Duna",
        "Suspense" => "O Massacre da Família Hope",
        "Culinária" => "Le Cordon Bleu: Todas as Técnicas Culinárias",
        "Direito" => "Introdução ao Estudo do Direito",
        "Política" => "Manifesto do Partido Comunista",
        "Infantil" => "O Ratinho, o Morango Vermelho Maduro e o Grande Urso Esfomeado",
        "Auto Ajuda" => "A Sutil Arte de Ligar o F*da-se"

    ];

    return $recomendacoes[$genero];
}

// Recebendo dados do formulário

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$genero = $_POST["genero"];

// Array do usuário

$usuario = [

    "nome" => $nome,
    "idade" => $idade,
    "email" => $email,
    "senha" => $senha,
    "genero" => $genero

];

// Calculo da idade


// Categoria

if($idade < 18){

    $categoria = "Leitor Jovem";

}else{

    $categoria = "Leitor Adulto";

}

// Recomendação

$livroRecomendado = recomendarLivro($genero);

// Chama a página de relatório

require_once("view_saida.php");