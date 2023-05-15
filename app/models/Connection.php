<?php

namespace app\models;

use app\classes\Bind;
use PDO;

class Connection{

    public function connect(){

        $cfg = Bind::get('config')->database;

        $pdo = new PDO("mysql:host=$cfg->host;
                        dbname=$cfg->dbname;
                        charset=$cfg->charset",
                        $cfg->user, $cfg->pass,
                        $cfg->options);
        return $pdo;
    }

}