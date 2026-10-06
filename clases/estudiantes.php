<?php 

class estudiantes{
     Private $idEstudiantes;
     private $documentoIdentidad;
     private $nombre;
     private $apellido;
     private $dreccion;

     function __construct(){
        //inicializar variable
        $this->idEstudiantes=0;
        $this->documentoIdentidad=0;
        $this->nombre=0;
        $this->apellido=0;
        $this->dreccion=0;
     }
     public function setDocumentoIdentidad($documentoIdentidad){
        $this->documentoidentidad=$documentoIdentidad; 
      }

      public function setNombre($nombre){
        $this->nombre=$nombre; 
      }

      public function setApellido($apellido){
        $this->apellido=$apellido; 
      }

      public function setDireccion($direccion){
        $this->direccion=$direccion; 
      }

      public function getidEstudiante(){
        return $this->estudiante;
      }

      public function getDocumentoIdentidad(){
        return $this->DocumentoIdentidad;
      }

      public function getNombre(){
        return $this->nombre;
      }

      public function getApellido(){
        return $this->apellido;
      }

      public function getDirrecion(){
        return $this->direccion;
      }

      public function listado(){
        
      }

      public function adiccionar(){
       
      }

      public function eliminar(id){
        
      }
      public function actualizar(id){
        
      }
      public function buscar(id){
       
      }

      function __destruct() {
        //finalizar varibles
        $this->idEstudiante=0;
        $this->documentoIdentidad=0;
        $this->nombre=0;
        $this->apellido=0;
        $this->direccion=0;
     

     }
?>
