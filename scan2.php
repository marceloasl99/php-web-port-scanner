<?php
$senha_correta = "999"; // Senha definida diretamente no código

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ip = $_POST["ip"];
    $porta_inicial = (int)$_POST["porta_inicial"];
    $porta_final = (int)$_POST["porta_final"];
    $senha = $_POST["senha"];

    if ($senha === $senha_correta) {
        portScan($ip, $porta_inicial, $porta_final);
    } else {
        echo "Senha incorreta.";
    }
}

function portScan($host, $porta_inicial, $porta_final) {
    for ($porta = $porta_inicial; $porta <= $porta_final; $porta++) {
        $connection = @fsockopen($host, $porta, $errno, $errstr, 0.1); // Timeout de 0.5 segundos
        if (is_resource($connection)) {
            echo "Porta $porta aberta: $porta <br />" . PHP_EOL;
            fclose($connection);
            ob_flush();
            flush();
        }
    }
}
?>