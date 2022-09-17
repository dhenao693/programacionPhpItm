<?php
    class EvidenciaController{
        var $objEvidencia;

        function __construct($objEvidencia){
            $this->objEvidencia = $objEvidencia;
        }

        function guardarEvidencia(){
            $titu=$this->objEvidencia->getTitulo();
            $des=$this->objEvidencia->getDescripcion();
            $tip=$this->objEvidencia->getTipo();
            $fechaCre=$this->objEvidencia->getFechaCreacion();
            $fechaRegistroEvi=$this->objEvidencia->getFechaRegistroEvidencia();
            $autores=$this->objEvidencia->getAutores();
            $Observacion=$this->objEvidencia->getObservacion();
            $Paralelo=$this->objEvidencia->getPARALELO();
            $Meridiano=$this->objEvidencia->getMERIDIANO();
            $Estado=$this->objEvidencia->getESTADO();
            $ID_Evidencia=$this->objEvidencia->getID_EVIDENCIA();
            $ID_EVIDENCIA_DETALLE=$this->objEvidencia->getID_EVIDENCIA_DETALLE();
            $USUARIO_MODIFICACION=$this->objEvidencia->getUSUARIO_MODIFICACION();
            $FechaModifi=$this->objEvidencia->getFECHA_MODIFICACION();
            $Estado_Anterior=$this->objEvidencia->getESTADO_ANTERIOR();
            $Estado_Actual=$this->objEvidencia->getESTADO_ACTUAL();

            $sql="INSERT INTO EVIDENCIA VALUES('"."','".$titu."','".$des."','".$tip."','".$fechaCre."','".$fechaRegistroEvi."','".$autores."','".$Observacion."','".$Paralelo."','".$Meridiano."','".$Estado."')";
            $DB = new ControlConexion();
            $DB->abrirBd("localhost","root","","PROGRAMACION_PHP", 3306);
            $DB->ejecutarComandoSql($sql);
            $DB->cerrarBd();
        }   

        function guardarEvidenciaHistorico(){
            $ID_EVIDENCIA_DETALLE=$this->objEvidencia->getID_EVIDENCIA_DETALLE();
            $USUARIO_MODIFICACION=$this->objEvidencia->getUSUARIO_MODIFICACION();
            $FechaModifi=$this->objEvidencia->getFECHA_MODIFICACION();
            $Estado_Anterior=$this->objEvidencia->getESTADO_ANTERIOR();
            $Estado_Actual=$this->objEvidencia->getESTADO_ACTUAL();

            $sql="INSERT INTO EVIDENCIA_DETALLE VALUES('"."','".$ID_EVIDENCIA."','".$USUARIO_MODIFICACION."','".$FechaModifi."','".$Estado_Anterior."','".$Estado_Actual."')";
            $DB = new ControlConexion();
            $DB->abrirBd("localhost","root","","PROGRAMACION_PHP", 3306);
            $DB->ejecutarComandoSql($sql);
            $DB->cerrarBd();
        }

        function borrar(){
            $ID_EVIDENCIA = $this->$objEvidencia->getID_EVIDENCIA();

            $sql="DELETE FROM EVIDENCIA WHERE ID_EVIDENCIA='".$ID_EVIDENCIA."'";
            $DB = new ControlConexion();
            $DB->abrirBd("localhost","root","","PROGRAMACION_PHP", 3306);
            $DB->ejecutarComandoSql($sql);
            $DB->cerrarBd();
        }

        function consultar(){
            $ID_EVIDENCIA = $this->$objEvidencia->getID_EVIDENCIA();

            $sql="SELECT * FROM EVIDENCIA WHERE ID_EVIDENCIA='".$ID_EVIDENCIA."'";
            $DB = new ControlConexion();
            $DB->abrirBd("localhost","root","","PROGRAMACION_PHP", 3306);
            $recordSet=$DB->ejecutarSelect($sql);
            if($row = $recordSet->fetch_array(MYSQLI_BOTH)){
                $this->$objEvidencia->setTitulo($row['TITULO']);
                $this->$objEvidencia->setTipo($row['TIPO']);
                $this->$objEvidencia->setDescripcioN($row['DESCRIPCIÓN']);
                $this->$objEvidencia->setFechaCreacion($row['FECHA_CREACION_EVIDENCIA']);
                $this->$objEvidencia->setFechaRegistroEvidencia($row['FECHA_REGISTRO_EVIDENCIA']);
                $this->$objEvidencia-setAutores($row['AUTORES']);
                $this->$objEvidencia->setObservacion($row['OBSERVACION']);
                $this->$objEvidencia->setPARALELO($row['PARALELO']);
                $this->$objEvidencia->setMERIDIANO($row['MERIDIANO']);
                $this->$objEvidencia->setESTADO($row['ESTADO']);
            }
            $DB->cerrarBd();
            return $this->$objEvidencia;
        }

        function actualizar(){
            $titu=$this->objEvidencia->getTitulo();
            $des=$this->objEvidencia->getDescripcion();
            $tip=$this->objEvidencia->getTipo();
            $fechaCre=$this->objEvidencia->getFechaCreacion();
            $fechaRegistroEvi=$this->objEvidencia->getFechaRegistroEvidencia();
            $autores=$this->objEvidencia->getAutores();
            $Observacion=$this->objEvidencia->getObservacion();
            $Paralelo=$this->objEvidencia->getPARALELO();
            $Meridiano=$this->objEvidencia->getMERIDIANO();
            $Estado=$this->objEvidencia->getESTADO();
            $ID_Evidencia=$this->objEvidencia->getID_EVIDENCIA();
            $ID_EVIDENCIA_DETALLE=$this->objEvidencia->getID_EVIDENCIA_DETALLE();
            $USUARIO_MODIFICACION=$this->objEvidencia->getUSUARIO_MODIFICACION();
            $FechaModifi=$this->objEvidencia->getFECHA_MODIFICACION();
            $Estado_Anterior=$this->objEvidencia->getESTADO_ANTERIOR();
            $Estado_Actual=$this->objEvidencia->getESTADO_ACTUAL();

            $sql="UPDATE EVIDENCIA SET TITULO='".$titu."',DESCRIPCIÓN='".$des."',TIPO='".$tip."',FECHA_CREACION_EVIDENCIA='".$fechaCre."',FECHA_REGISTRO_EVIDENCIA='".$fechaRegistroEvi."',AUTORES='".$autores."',OBSERVACION='".$Observacion."',PARALELO='".$Paralelo."',MERIDIANO='".$Meridiano."',ESTADO='".$Estado."'";

        }


    }
?>