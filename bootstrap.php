<?php

require "vendor/autoload.php";

use app\classes\Bind;

$cfg = require "config.php";

Bind::set('config', $cfg);