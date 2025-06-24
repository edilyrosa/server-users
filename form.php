<?php
declare(strict_types=1);

// URL de tu API en Render
$api_url = "https://server-usuarios-qsdd.onrender.com/usuarios";

// Solo aceptar POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Método no permitido');
}

// Validar y sanitizar entradas
$nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
$edad = filter_input(INPUT_POST, 'edad', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$foto = filter_input(INPUT_POST, 'foto', FILTER_VALIDATE_URL);
$aceptacion = filter_input(INPUT_POST, 'aceptacion', FILTER_VALIDATE_INT);
$genero = filter_input(INPUT_POST, 'genero', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

// Verificar que todos los datos sean válidos
if (!$nombre || $edad === false || !$email || !$foto || $aceptacion === false || $genero === null) {
    http_response_code(400);
    exit('Datos inválidos o incompletos');
}

// Preparar datos para insertar
$usuario_data = [
    'nombre' => $nombre,
    'edad' => $edad,
    'email' => $email,
    'foto' => $foto,
    'aceptacion' => $aceptacion,
    'genero' => $genero
];

// Inicializar cURL
$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json'
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($usuario_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

// Manejar errores y mostrar respuesta
if (curl_errno($ch)) {
    echo 'Error cURL: ' . curl_error($ch);
} else {
    if ($http_code === 201 || $http_code === 200) {
        echo 'Usuario registrado exitosamente!';
    } else {
        http_response_code(500);
        echo "Error al registrar usuario: HTTP $http_code - Respuesta: $response";
    }
}

curl_close($ch);
