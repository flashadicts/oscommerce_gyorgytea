<?php
  define('HTTP_SERVER', 'http://192.168.79.132');
  define('HTTPS_SERVER', 'http://192.168.79.132');
  define('ENABLE_SSL', false);
  define('HTTP_COOKIE_DOMAIN', '');
  define('HTTPS_COOKIE_DOMAIN', '');
  define('HTTP_COOKIE_PATH', '/oscommerce/');
  define('HTTPS_COOKIE_PATH', '/oscommerce/');
  define('DIR_WS_HTTP_CATALOG', '/oscommerce/');
  define('DIR_WS_HTTPS_CATALOG', '/oscommerce/');
  define('DIR_WS_IMAGES', 'images/');
  define('DIR_WS_ICONS', DIR_WS_IMAGES . 'icons/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');

  define('DIR_WS_DOWNLOAD_PUBLIC', 'pub/');
  define('DIR_FS_CATALOG', '/var/www/oscommerce/');
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');

  define('DB_SERVER', 'localhost');
  define('DB_SERVER_USERNAME', 'admin');
  define('DB_SERVER_PASSWORD', 'admin');
  define('DB_DATABASE', 'oscommerce');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'mysql');
  define('CFG_TIME_ZONE', 'UTC');
?>