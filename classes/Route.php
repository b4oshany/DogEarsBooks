<?php 
    /*Routes class
        $Routes : An list of defined routes
        $set : Adds a route to the routes list and execute route function
    */
    class Route {
        public static $Routes =  array();

        public static function set($route, $function){
            self::$Routes[] =  $route;

            if($_GET['url'] == $route) {
                $function->__invoke();
            }

        }
    }
?>