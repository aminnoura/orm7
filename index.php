<?php
namespace orm7;
use orm\User;

spl_autoload_register();

$user = new User();
var_dump($user->getAll());
echo "<br/><br/>";
var_dump($user->getBy("id",3));

echo nl2br("\n End");
