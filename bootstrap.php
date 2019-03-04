<?php

$config = require 'config.php';
require  'Task.php';
require  'function.php';
require 'database/connection.php';
require 'database/QueryBuilder.php';

return new QueryBuilder(Connection::make($config['database']));


