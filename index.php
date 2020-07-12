<?php
namespace orm7;
use config\Connect;

spl_autoload_register();

$con = new Connect();
$con->startConnection();

echo nl2br("\n End");
