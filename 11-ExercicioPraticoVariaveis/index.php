<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Prático - Variáveis</title>
</head>
<body>
    <pre>
        <?php
            $lista = [
                'nome' => 'Anderson',
                'idade' => '40',
                'atributos' =>[ 
                                'forca' => 60,
                                'agilidade' => 90,
                                'destreza' => 50
                ],
                'vida' => 1000,
                'mana' => 928

            ];

            print_r($lista);

            echo "<hr>";

            echo "Nome: ". $lista['nome']."<br>";
            echo "Idade: ". $lista['idade']."<br>";
            echo "Força: ". $lista['atributos']['forca']."<br>";
            echo "Agilidade: ". $lista['atributos']['agilidade']."<br>";
            echo "Destreza: ". $lista['atributos']['destreza']."<br>";
            echo "Vida: ". $lista['vida']."<br>";
            echo "Mana: ". $lista['mana']."<br>";
        ?>
    </pre>
</body>
</html>