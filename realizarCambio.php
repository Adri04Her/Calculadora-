<?php
require_once 'CambioDivisas.php';

$coeficienteCambio = 35.00;
$conversor = new ConversorDivisa($coeficienteCambio);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$cantidadBolivares = $_POST["cantidad"];
$cantidadDolares = $conversor->calcularEnDolares($cantidadBolivares);

echo "La cantidad en dólares es: " . number_format($cantidadDolares, 2);
}
?>