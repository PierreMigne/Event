<?php

use App\FactoryPDO;
use App\Migration;
use App\User;

require_once './vendor/autoload.php';


// pour se connecter à la base de données, dans ce cas SQLite crée automatiquement 
$m = new Migration();
$pdo = FactoryPDO::buildSqlite("sqlite:" . __DIR__ . "/_data/database.db");
$m->setData($pdo);


$user = new User("sqlite:" . __DIR__ . "/_data/database.db");

// var_dump($user->find(2));
