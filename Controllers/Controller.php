<?php 
    /* 
        Parent class
        Renders specified page
    */
    class Controller {
        public static function RenderView($view) {
            require_once("./views/$view.php");
        }
    }
?>