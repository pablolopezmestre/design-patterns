<?php

/**
 * Haces que una clase sólo pueda instanciarse una única vez. Obtienes un punto de acceso global a dicha instancia.
 *
 * Para ello, hay que hacer privado el constructor para evitar que otros objetos utilicen el operador new con la clase
 * Singleton; Y crear un método de creación estático que actúe como constructor, y que se instancia a si mismo sólo
 * una vez
 */
class Singleton
{
    private static $instance;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (! isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}

$object = Singleton::getInstance();
