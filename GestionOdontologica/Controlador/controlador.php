<?php
class Controlador {
public function verPagina($ruta){
require_once $ruta;
}
public function agregarCita($doc,$med,$fec,$hor,$con){
$cita = new Cita(null, $fec, $hor, $doc, $med, $con, "Solicitada",
"Ninguna");
$gestorCita = new GestorCita();
$id = $gestorCita->agregarCita($cita);
$result = $gestorCita->consultarCitaPorId($id);
require_once 'Vista/html/ConfirmarCita.php';
}
public function consultarCitas($doc){
    $gestorCita = new GestorCita();
    $result = $gestorCita->consultarCitasPorDocumento($doc);
    require_once 'Vista/html/consultarCitas.php';
    }
    public function cancelarCitas($doc){
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once 'Vista/html/cancelarCitas.php';
        }
        public function consultarPaciente($doc){
            $gestorCita = new GestorCita();
            $result = $gestorCita->consultarPaciente($doc);
            require_once 'Vista/html/consultarPaciente.php';
            }
}