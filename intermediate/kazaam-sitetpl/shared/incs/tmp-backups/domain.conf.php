<?php

/**

this config file is used to set domain specific paths and values for a
website in the develop, intermediate and live directories.

It is included by user-config.conf.php as plain text, and not encoded.

Values set here apply globally to a site, and may NOT be overidden
anywhere else.

Do NOT overwrite this file when updating site code from develop or
intermediate code branches. Different values apply for each develop,
intermediate and live directory.

**/

// URL for this website - used for validating xhtml & CSS
// this needs to be set to the name of the virtual domain name
// when in a virtual server live directory container
$DOMAIN_NAME = "http://www.kazaam-mwf.net";

// full path to website's base directory relative to DocumentRoot setting
// this needs to be set to "" when in a virtual server
// live directory container
$WEBSITE_ROOT = "/KAR/MyGithubProjects/pending/PHP/kazaam-mwf/intermediate/kazaam-sitetpl";

// sitename to be used in page <title> tags
$sitename = 'kazaam-sitetpl - INTERMEDIATE';

// path to shared-host include files
// these include files are shared by all virtual hosts
// on this physical web server
$SHARED_HOST_INCS = "../../../../shared-host/incs";

// path to shared-host class files
// these include files are shared by all virtual hosts
// on this physical web server
$SHARED_HOST_CLASSES = "../../../../shared-host/classes";

?>
