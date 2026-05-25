<?php
$pessoas = [
    ["nome" => "Paola Farias", "idade"=> 18],
    ["nome" => "pemela", "idade"=> 18],
    ["nome" => "Kadson", "idade"=> 19],
];

foreach ($pessoas as $key => $item){
    $nome = $item['nome'];
    $idade = $item['idade'];
    echo "Indice: $key Nome: $nome Idade: $idade <br>";
}
