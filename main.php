<?php
/**
 * Plugin Name:  Plugin Ivan
 * Plugin URI: http://webnova.com.ar/
 * Description: Plugin de pruebas
 * Version: 1.0
 * Author: Iván Delgado
 * Author URI: http://webnova.com.ar/
 */

function Activar(){


}

function Desactivar(){
      flush_rewrite_rules();
}



register_activation_hook(__FILE__,'Activar');
register_deactivation_hook(__FILE__,'Desactivar');

echo "Hola Plugin";

add_action('admin_menu', 'CrearMenu');

function CrearMenu(){
    add_menu_page(
        'Nueva Pagina',//Titulo de la pagina
        'Super Menu',//Titulo del menu
        'manage_options',//(Capabilities)User que puede ver este menu
        'sp_menu',//opciones que despliega la pagina previamente especificada (slug)
        'MostrarContenido',//function del contenido
         plugin_dir_url(__FILE__).'admin/img/icon.png',
         '5');

    add_submenu_page(){
         'sp_menu'//parent slug
         'Ajustes'//nombre de la pagina
         'Ajustes'//titulo del menu
         'manage_options'
         'sp_menu_ajustes'
         'subMenuInfo'

    }
}

function subMenuInfo(){
    echo "subMenu";
}



function MostrarContenido(){
  require_once "formulario.php";

}


?>