<?php

/**

This config file is used to set domain specific paths and values
for each virtual host in the develop, intermediate and live
code branches.

It is included by user.conf.php as plain text, and not encoded.

Values set here apply globally to a virtual host, and may NOT be
overidden anywhere else.

Do NOT overwrite this file when moving virtual host code from the
develop or intermediate code branches. Different values apply for
each virtual host in the develop, intermediate and live code
branches.

**/

// URL for this virtual host - used for validating xhtml & CSS.
// In the live code branch this needs to be set to the virtual host's
// registered domain name. This is the ServerName value prefixed with
// http:// (or https://).
$DOMAIN_NAME = "http://www.kazaam-mwf.net";

// Full path to the virtual host's base directory relative to Apache's
// DocumentRoot setting. This needs to be set to "" for virtual hosts
// in the live code branch.
$WEBSITE_ROOT = "";

// sitename to be used in a virtual host's page <title> tags.
$sitename = 'first-site - LIVE';

// Path to shared-host include files.
// These include files are shared by all virtual hosts
// on this physical web server.
$SHARED_HOST_INCS = "../../../../shared-host/incs";

// Path to shared-host class files.
// These include files are shared by all virtual hosts
// on this physical web server.
$SHARED_HOST_CLASSES = "../../../../shared-host/classes";

?>
