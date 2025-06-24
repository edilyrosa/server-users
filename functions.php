<?php
declare(strict_types=1);

function render_template (string $template, array $data = []) {
    // extract() convierte las claves de $data en variables disponibles en el template
    extract($data);
    require_once "templates/$template.php";
}