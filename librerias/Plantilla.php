<?php
class Plantilla
{
    public static   function get_plantilla(){
        $plantilla = new Smarty();
        $plantilla->template_dir= "/var/www/ExJ1S/vistas/plantillas";
        $plantilla->compile_dir= "/var/www/ExJ1S/vistas/plantillas_c";
        return $plantilla;
    }

}