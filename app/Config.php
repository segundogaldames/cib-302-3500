<?php
#configuar accesos, datos y roles del sistema
#variables de entorno

define('BASE_URL','http://localhost:8080/cib302-3500/');
define('DEFAULT_CONTROLLER','index');
define('DEFAULT_LAYOUT','default');
define('APP_NAME','Portal del Noticias');

define('SESSION_TIME', 10);
define('HASH_KEY','6yl3Lyc6EdGO57puk3r0isuTArFm0IvR2ILrWCbTnvEWgGCiR4k1v0T43Z/uMdC5w7ZMm2Q/iiN/7/apEAFlLQ==');
define('CTRL','quVq6zWID3eaVS0YP4yD7F1fEvOOT+mDUBa4DAPWTYiVsXPUYIfDUpSpE1sFxKeDoGILbp3me22DRmTPnroCzA==');

#credenciales de acceso a base de datos
define('DB_DRIVER','mysql');
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','1234');#los usuarios de Windows usan comillas vacias ''
define('DB_NAME','cib3023500');
define('DB_CHAR','utf8');
define('METHOD_ENCRYPT','AES-256-ECB');