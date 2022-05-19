<?php

namespace Model;

class Servicio extends ActiveRecord {

    //Base de datos
    protected static $tabla = 'servicios';
    protected static $columnasDB = ['id', 'nombre','precio'];

    public $id;
    public $nombre;
    public $precio;

    public function __construct($args = []){
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';

    }

    public function validar(){

        if(!$this->nombre){
            self::$alertas['Error'][] = 'El Nombre del servicio es obligatorio';
        }

        if(!$this->precio){
            self::$alertas['Error'][] = 'El Precio del servicio es obligatorio';
        }

        if(!is_numeric($this->precio)){
            self::$alertas['Error'][] = 'El Precio no es válido';
        }

        return self::$alertas;
    }
}