<?php

session_start();
session_destroy();

$con = new mysqli('localhost','root', '', 'new_petallies');

if ($con == false) {
    die("Connetion Error");
}

?>