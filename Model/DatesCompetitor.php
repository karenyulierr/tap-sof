<?php

class DatesCompetitor {

    private $miConexion;
    private $mensaje;
    private $retorno;

    function __construct() {
        $this->miConexion = Conexion::singleton();
        $this->retorno = new stdClass();
    }

    public function addCompetitor(Competitor $unCompetitor) {
        $this->mensaje = null;

        try {
            $this->miConexion->beginTransaction();
            $consulta = "INSERT INTO competitor VALUES (null,?,?,?)";
            $resultado = $this->miConexion->prepare($consulta);
            $resultado->bindParam(1, $unCompetitor->getName());
            $resultado->bindParam(2, $unCompetitor->getScore());
            $resultado->bindParam(3, $unCompetitor->getCreatedAt());
            $resultado->execute();
        } catch (PDOException $ex) {
            $this->mensaje = $ex->getMessage();
            $this->retorno->estado = false;
            $this->retorno->datos = NULL;
            $this->retorno->mensaje = $this->mensaje;
        }
        return $this->retorno;
    }
}
?>