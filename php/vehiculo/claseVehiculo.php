<?php
    class Vehiculo {
        public $matricula;
        public $marca;
        public $modelo;
        public $color;
        public $revisado = "N";

        function __construct($matricula, $marca, $modelo, $color) {
            $this->matricula = $matricula;
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->color = $color;
        }

        function get_matricula() {
            return $this->matricula;
        }

        function get_marca() {
            return $this->marca;
        }

        function get_modelo() {
            return $this->modelo;
        }

        function get_color() {
            return $this->color;
        }

        function get_revisado() {
            return $this->revisado;
        }

        function set_revisado($revisado) {
            $this->revisado = $revisado;
        }
    }
?>