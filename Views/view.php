<?php

class View{

    //La clase view es donde se llama a las vistas
    public static function show ($viewname, $data=null){

        include "$viewname.php";

    }

}