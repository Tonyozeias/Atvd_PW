<?php
$ano_nascimento = isset($_POST['ano_nascimento']) ? (int)$_POST['ano_nascimento'] : 0;

define("ANO_ATUAL", 2025);

if ($ano_nascimento > 0 && $ano_nascimento <= ANO_ATUAL) {
    $idade = ANO_ATUAL - $ano_nascimento;
    $dias_vividos = $idade * 365; 
    $idade_2050 = 2050 - $ano_nascimento;
    echo "Idade em anos: $idade <br>";
    echo "Dias vividos (aprox): $dias_vividos <br>";
    echo "Idade em 2050: $idade_2050 <br>";
} else {
    echo "<form method='post'>";
    echo "Ano de nascimento: <input type='number' name='ano_nascimento' required min='1900' max='" . ANO_ATUAL . "'>";
    echo "<button type='submit'>Enviar</button>";
    echo "</form>";
}
?>