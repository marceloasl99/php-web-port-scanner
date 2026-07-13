<?php
function portScan($host, $ports) {
    $results = [];
    foreach ($ports as $porta) {
        $connection = @fsockopen($host, $porta, $errno, $errstr, 1);
        if (is_resource($connection)) {
            $status = "Aberta";
            fclose($connection);
        } else {
            $status = "Fechada";
        }
        $results[] = array("status" => $status, "port" => $porta);
    }
    return $results;
}

// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtém os dados do POST
    $data = json_decode(file_get_contents('php://input'), true);
    $host = $data['host'];
    $ports = $data['ports'];

    // Valida os dados (opcional, mas recomendado)
    if (!empty($host) && is_array($ports)) {
        $resultados = portScan($host, $ports);
        header('Content-Type: application/json'); // Define o tipo de conteúdo como JSON
        echo json_encode($resultados); // Envia os resultados como JSON
    } else {
        echo json_encode(array("erro" => "Dados inválidos."));
    }
}
?>