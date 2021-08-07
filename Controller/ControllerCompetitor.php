<?php
extract($_REQUEST);
include '../Model/Conexion.php';
include '../Model/Competitor.php';
include '../Model/DatesCompetitor.php';

$objDatesCompetitor = new DatesCompetitor();

switch (1) {
        //Agregar competidor

    case 1:
        $name = "assa";
        $score = 30;
        $date_created = date("Y-m-d H:i:s");
        $unCompetidor = new Competitor($name, $score, $date_created);
        // print_r($unCompetidor);
        $resultado = $objDatesCompetitor->addCompetitor($unCompetidor);
        // echo $resultado->mensaje;
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
