<?php
namespace orm7;
use orm\User;

spl_autoload_register();

$user = new User();
$allUsers = $user->getAll();

echo nl2br("\n-----print all users-----\n");
foreach ($allUsers as $u) {
    echo nl2br("user with id ".$u['id']." is ".$u['firstname']." ".$u['lastname']."\n");
}
echo nl2br("\nUser with id 3:\n");
$u3 = $user->getById(3);
echo nl2br("user with id 3 is ".$u3['firstname']." ".$u3['lastname']."\n");

echo nl2br("\n\n End");
