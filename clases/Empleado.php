<?php
abstract class Empleado {
    __construct($nombre, $apellido, $numeroSeguridadSocial) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    __getNombre() {
        return $this->nombre;
    }

    __setNombre($nombre) {
        $this->nombre = $nombre;
    }

    __getApellidos() {
        return $this->apellido;
    }

    __setNombre($apellido) {
        $this->apellido = $apellido;
    }

    __getNumeroSeguridadSocial() {
        return $this->numeroSeguridadSocial;
    }

    __setNumeroSeguridadSocial($numeroSeguridadSocial) {
        $this->numeroSeguridadSocial = $numeroSeguridadSocial;
    }

    mostrar() {
        return "Nombre y apellidos del empleado: $this->nombre, $this->apellidos \nElnúmero de la Seguridad Social es: $this->numeroSeguridadSocial";
    }
}
