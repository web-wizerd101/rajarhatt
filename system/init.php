<?php

function __autoload($classname) {
    $filename = base_root . "/rajarhatt/system/classes/" . $classname . ".php";
    include_once($filename);
}

//$rout = new rout;
?>