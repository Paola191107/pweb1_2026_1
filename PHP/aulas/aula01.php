<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPt</title>
</head>

<body>
    <?php
    echo "Ola Mundo PHP!" . "<br>";

    $nome = "Paola Farias turmena";
    $idade = 18;

    echo "Nome: $nome - Idade: $idade" . "<br>";

    echo "<br>";
    if ($idade >= 18) {
        echo "De Maior";
    } else {
        echo "De Menor";
    }
    //notas
    $notas = [5, 7, 9, 10];

    echo "<br>";
    for ($i = 0; $i < count($notas); $i++) {
        echo $notas[$i] . "<br>";
    }
    echo "<br>";
    foreach ($notas as $item) {
        echo $item . "<br>";
    }

    //nomes
    $nomes = ["Paola", "Maria", "Ellen", "Pedro", "Pamela", "Kadson"];

    echo "<br>";

    for ($i = 0; $i < count($nomes); $i++) {
        echo $nomes[$i] . "<br>";
    }
    echo "<br>";
    foreach ($nomes as $item) {
        echo $item . "<br>";
    }
    //carros
    $carros = [
        ['modelo' => "Mustang", 'cor' => "Branco", 'ano' => 2026],
        ['modelo' => "Opala", 'cor' => "Preto", 'ano' => 1970],
        ['modelo' => "Fusca", 'cor' => "Azul", 'ano' => 1950],
    ];

    echo $carros[0]['modelo'] . "-" . $carros[0]['cor'];
    echo "<br>";

    foreach ($carros as $indice => $carro) {
        echo $indice + 1;
        echo "Modelo:" . $carro['modelo'] . "Ano" . $carro['ano'];
    }
    ?>


    <p> Meu site <?= $carros[0]['modelo'] . " -ano " . $carros[0]['ano'] ?> </p>
    <?php
    include "./aula02.php";
    ?>

</body>

</html>