<?php
// Ejemplo de configuración. Definí las variables de entorno en el servidor.
// Nunca publiques contraseñas reales en el repositorio.
$DB_HOST = getenv('DB_HOST') ?: 'localhost';
$DB_NAME = getenv('DB_NAME') ?: '';
$DB_USER = getenv('DB_USER') ?: '';
$DB_PASS = getenv('DB_PASS') ?: '';
$PANEL_PASS = getenv('PANEL_PASS') ?: '';
if ($DB_NAME === '' || $DB_USER === '' || $DB_PASS === '' || $PANEL_PASS === '') {
    http_response_code(503);
    exit('Falta configurar las variables de entorno de la aplicación.');
}
