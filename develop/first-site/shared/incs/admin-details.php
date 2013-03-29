<?php

 // first-site website administrator's username and password details.
 // file-id: /first-site/shared/incs/admin-details.php
 // this file is included by admin-page-check.php

 // admin username
 $sa_username = bin2hex(mhash(MHASH_MD5, "keith"));

 // admin password
 $sa_password = bin2hex(mhash(MHASH_MD5, "zxcvbnm"));

?>
