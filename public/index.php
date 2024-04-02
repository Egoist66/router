<?php

use App\debug\Debug;
use App\RMVC\App;

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../routes/web.php';

App::run(static fn() => Debug::watch());
