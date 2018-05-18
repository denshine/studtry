<?php

// разделитель для путей к файлам
define ('DS', DIRECTORY_SEPARATOR);

$sitePath = realpath(dirname(__FILE__) . DS) . DS;

// путь к основной папке
define ('SITE_PATH', $sitePath);

