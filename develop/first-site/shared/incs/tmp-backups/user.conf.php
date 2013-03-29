<?php

// first-site user configuration file
// file-id: /first-site/shared/incs/user.conf.php

/**

This config file is included by site-config.php as plain text, and
not encoded. PHP variables set here apply globally to a website,
but may also be overidden in module-name.conf.php files, or
individually in each website page.

**/

// Uncomment this line to turn OFF all error messages globally.
// error_reporting(0);

// meta keywords tag
$META_KEYWORDS = 'keyword default content for
  first-site website here - may span multiple lines';

// meta description tag
$META_DESCRIPTION = 'description default content for
  first-site website here - may span multiple lines';

/* ---------------------------------------------- */
 // database connectivity
 // each website has at least one database with the same
 // name as the website

 // Mysql hostname for this website
 $hostname = 'localhost';

 // default database for this website
 $dbname = 'first-site';

 // $username is set for each module in:
 //  module-name/local/incs/module-name.conf.php
 //
 // $password is set for each module in:
 //  module-name/local/incs/module-name.conf.php
/* ---------------------------------------------- */

/* ---------------------------------------------- */
// This required config file will not be encoded,
// and contains PHP variables to set virtual host domain specific paths.

require "$SHARED_INCS/domain.conf.php";
/* ---------------------------------------------- */

?>
