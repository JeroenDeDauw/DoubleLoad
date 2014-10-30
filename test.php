<?php

error_reporting( E_ALL | E_STRICT );
ini_set( 'display_errors', 1 );

require 'a/vendor/autoload.php';
require 'b/vendor/autoload.php';

$logger = new \Psr\Log\NullLogger();

echo '~=[,,_,,]:3';