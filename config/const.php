<?php
 
 define('DS', '/');
 defined("DSS")? NULL : define("DSS", DIRECTORY_SEPARATOR);
  // URL for locating and including php files
    
	defined("URL") ? NULL : define("URL", "");	
	defined("DIR") ? NULL : define("DIR",  "".DSS."kinetech.frw".DSS);	
	defined("ASST") ? NULL : define("ASST", URL."assets");
	defined("CORE") ? NULL : define("CORE", URL."core");
	defined("LIB") ? NULL : define("LIB", URL."LIB");
	defined("CTRL") ? NULL : define("CTRL", URL."controllers");
	defined("MDL") ? NULL : define("MDL", URL."model");
	defined("APP") ? NULL : define("APP", URL."apps");
	defined("CFG") ? NULL : define("CFG", URL."config");
	defined("DOCS") ? NULL : define("DOCS", URL."documents");
	defined("DEFAULT_CONTROLLER") ? NULL : define("DEFAULT_CONTROLLER", "index");
	defined("HASH_PASS")? NULL: define("HASH_PASS", "L1taha2ka2ya7K");
     
   defined("HASH_KEY")? NULL: define("HASH_KEY", "02elbMarcsTi71");
?>