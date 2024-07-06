<?php 
require 'orchis/Orchis.php';
$param=json_decode(file_get_contents(__DIR__.'/init.json'),true);
Db::connect((object)$param);

extract($_REQUEST);
$_c=$_c??'index';
$_a=$_a??'';

