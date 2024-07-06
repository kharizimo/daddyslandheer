<?php 
require 'init.php';


$url=is_file("html/$_c.php")?"html/$_c.php":"html/404.php";
ob_start();require $url;
$_content=ob_get_clean();

require 'layers/layout.php';