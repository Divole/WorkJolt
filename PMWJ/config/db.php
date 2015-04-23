<?php

/**
 * Configuration for: Database Connection
 *
 * For more information about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 *
 * DB_HOST: database host, usually it's "127.0.0.1" or "localhost", some servers also need port info
 * DB_NAME: name of the database. please note: database and database table are not the same thing
 * DB_USER: user for your database. the user needs to have rights for SELECT, UPDATE, DELETE and INSERT.
 * DB_PASS: the password of the above user
 */
define("DB_HOST", "127.0.0.1");
define("DB_NAME", "workjolt");
define("DB_USER", "root");
define("DB_PASS", "");
define("SECRET_SALT","51a93eae5a0449da635ad43d3d3968d818689cd934c0adc21299d9e720454965f3b4a48350c364ce61e35913e45e9b263b404db5f3de4a0329b1920a6c174a71");
?>
