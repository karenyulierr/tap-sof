<?php
extract($_REQUEST);
include '../Modelo/Conexion.php';
include '../Modelo/Competitor.php';
include '../Modelo/DatesCompetitor';

switch ($_REQUEST['opcion']) {
    //Agregar competidor
    case 1:
        $date_created = date("Y-m-d H:i:s");
        $unCompetidor = new Competitor('PRUEBA COTRL', 90, $date_created);
        //print_r($unaCategoria);
        $resultado = $objDatesCompetitor->addCompetitor($unCompetidor);
        //echo $resultado->mensaje;
        if ($resultado->estado == true) {
            $error = "";
            try {
                echo 'bien';
            } catch (Exception $ex) {
                $error = $ex->getMessage();
            }
        }
        break;
}
