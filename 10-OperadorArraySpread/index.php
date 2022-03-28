<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Array Spread (7.4)</title>
</head>
<body>
    <pre>
    <?php
        $bolo1 = [
            'açúcar',
            'farinha de trigo',
            'ovo',
            'leite',
            'fermento em pó'
        ]; 

        $bolo2 = [
            'uva',
            'chocolate',
            ...$bolo1,
            'corante'
        ];
        echo "<strong>Array Comum</strong><br>";

        print_r($bolo1);

        echo "<hr>";
        echo "<strong>Array Spread</strong><br>";

        print_r($bolo2);

        $lista1 = [
            1,2,3,4,5
        ];
        $lista2 = [
            
            6,7,8,9,10
        ];
        $lista3 = [
            ...$lista1, ...$lista2
        ];


        echo "<strong>Array Spread".' - $lista3'." </strong><br>";

        print_r($lista3);

        echo "<hr>";
    ?>
    </pre>
</body>
</html>