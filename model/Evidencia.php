<?php
class Evidencia{
    private string $TITULO;
    private string $DESCRIPCIÓN;
    private string $TIPO;
    private string $FECHA_CREACION_EVIDENCIA;
    private string $FECHA_REGISTRO_EVIDENCIA;
    private string $AUTORES;
    private string $OBSERVACION;
    private string $PARALELO;
    private string $MERIDIANO;
    private string $ESTADO;
    private string $ID_EVIDENCIA;
    private string $ID_EVIDENCIA_DETALLE;
    private string $USUARIO_MODIFICACION;
    private string $FECHA_MODIFICACION;
    private string $ESTADO_ANTERIOR;
    private string $ESTADO_ACTUAL;


    function __construct(string $TITULO,
    string $DESCRIPCIÓN,
    string $TIPO,
    string $FECHA_CREACION_EVIDENCIA,
    string $FECHA_REGISTRO_EVIDENCIA,
    string $AUTORES,
    string $OBSERVACION,
    string $PARALELO,
    string $MERIDIANO,
    string $ESTADO,
    string $ID_EVIDENCIA,
    string $ID_EVIDENCIA_DETALLE,
    string $USUARIO_MODIFICACION,
    string $FECHA_MODIFICACION,
    string $ESTADO_ANTERIOR,
    string $ESTADO_ACTUAL
    ){ //Constructor con parametros
        $this->DESCRIPCIÓN=$DESCRIPCIÓN;
        $this->TIPO=$TIPO;
        $this->FECHA_CREACION_EVIDENCIA=$FECHA_CREACION_EVIDENCIA;
        $this->FECHA_REGISTRO_EVIDENCIA=$FECHA_REGISTRO_EVIDENCIA;
        $this->AUTORES=$AUTORES;
        $this->OBSERVACION=$OBSERVACION;
        $this->PARALELO=$PARALELO;
        $this->MERIDIANO=$MERIDIANO;
        $this->ESTADO=$ESTADO;
        $this->ID_EVIDENCIA=$ID_EVIDENCIA;
        $this->ID_EVIDENCIA_DETALLE=$ID_EVIDENCIA_DETALLE;
        $this->USUARIO_MODIFICACION=$USUARIO_MODIFICACION;
        $this->FECHA_MODIFICACION=$FECHA_MODIFICACION;
        $this->ESTADO_ANTERIOR=$ESTADO_ANTERIOR;
        $this->ESTADO_ACTUAL=$ESTADO_ACTUAL;
    }

    function getTitulo(){
        return $this->TITULO;
    }

    function setTitulo($TITULO){
        return $this->TITULO;
    }

    function getDescripcion(){
        return $this->DESCRIPCIÓN;
    }

    function setDescripcion($DESCRIPCIÓN){
        return $this->DESCRIPCIÓN=$DESCRIPCIÓN;
    }

    function getTipo(){
        return $this->TIPO;
    }

    function setTipo($TIPO){
        return $this->TIPO=$TIPO;
    }

    function getFechaCreacion(){
        return $this->FECHA_CREACION_EVIDENCIA;
    }
    function setFechaCreacion($FECHA_CREACION_EVIDENCIA){
        return $this->FECHA_CREACION_EVIDENCIA=$FECHA_CREACION_EVIDENCIA;
    }

    function getFechaRegistroEvidencia(){
        return $this->FECHA_REGISTRO_EVIDENCIA;
    }

    function setFechaRegistroEvidencia($FECHA_REGISTRO_EVIDENCIA){
        return $this->FECHA_REGISTRO_EVIDENCIA=$FECHA_REGISTRO_EVIDENCIA;
    }

    function getAutores(){
        return $this->AUTORES;
    }

    function setAutores($AUTORES){
        return $this->AUTORES=$AUTORES;
    }

    function getObservacion(){
        return $this->OBSERVACION;
    }
    function setObservacion($OBSERVACION){
        return $this->OBSERVACION=$OBSERVACION;
    }

    function getPARALELO(){
        return $this->PARALELO;
    }

    function setPARALELO($PARALELO){
        return $this->PARALELO=$PARALELO;
    }

    function getMERIDIANO(){
        return $this->MERIDIANO;
    }

    function setMERIDIANO($MERIDIANO){
        return $this->MERIDIANO=$MERIDIANO;
    }

    function getESTADO(){
        return $this->ESTADO;
    }

    function setESTADO($ESTADO){
        return $this->ESTADO=$ESTADO;
    }

    function getID_EVIDENCIA(){
        return $this->ID_EVIDENCIA=$ID_EVIDENCIA;
    }

    function setID_EVIDENCIA($ID_EVIDENCIA){
        return $this->ID_EVIDENCIA=$ID_EVIDENCIA;
    }

    function getID_EVIDENCIA_DETALLE(){
        return $this->ID_EVIDENCIA_DETALLE;
    }

    function setID_EVIDENCIA_DETALLE($ID_EVIDENCIA_DETALLE){
        return $this->ID_EVIDENCIA_DETALLE=$ID_EVIDENCIA_DETALLE;
    }

    function getUSUARIO_MODIFICACION(){
        return $this->USUARIO_MODIFICACION;
    }

    function setUSUARIO_MODIFICACION($USUARIO_MODIFICACION){
        return $this->USUARIO_MODIFICACION=$USUARIO_MODIFICACION;
    }

    function getFECHA_MODIFICACION(){
        return $this->FECHA_MODIFICACION;
    }

    function setFECHA_MODIFICACION($FECHA_MODIFICACION){
        return $this->FECHA_MODIFICACION=$FECHA_MODIFICACION;
    }

    function getESTADO_ANTERIOR(){
        return $this->ESTADO_ANTERIOR;
    }

    function setESTADO_ANTERIOR($ESTADO_ANTERIOR){
        return $this->ESTADO_ANTERIOR=$ESTADO_ANTERIOR;
    }

    function getESTADO_ACTUAL(){
        return $this->ESTADO_ACTUAL;
    }

    function setESTADO_ACTUAL($ESTADO_ACTUAL){
        return $this->ESTADO_ACTUAL=$ESTADO_ACTUAL;
    }


}

?>