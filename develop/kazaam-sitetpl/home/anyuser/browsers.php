<?php require "../../shared/incs/site-config.php"; ?>
<?php /* require "$MODULE_CONFIG/home.conf.php"; */ ?>

<?php $META_KEYWORDS = '*keywords* meta information -
 may span multiple lines'; ?>

<?php $META_DESCRIPTION = '*description* meta information -
 may span multiple lines'; ?>

<?php $MODULE_NAME = "$sitename - Browsers"; ?>

<?php require "$SHARED_INCS/page-head.php"; ?>

<body>

<div id="main_window_2col">

<div class="box2">
<h3>Browser compatibility</h3>
</div>

<div class="box2">

<p>This site based on Kazaam Modular Website Framework has been
developed using browsers that make full use of the Gecko rendering
engine - like Mozilla 1.7.12, Firefox 1.5 and Netscape Navigator
8.0. To get the best use from this site please use any of these
browsers, or newer versions of them.</p>

<a class="external_link" target="_blank"
href="http://www.mozilla.org/why/support.html"> Why use
Mozilla or Firefox?</a></p>

<p>Mozilla and Firefox run on the following OS's</p>

<ul>
 <li>Win32</li>
 <li>Mac OS X</li>
 <li>Linux (x86)</li>
 <li>Solaris (Mozilla only)</li>
</ul>

<p><a target="blank" class="external_link"
href="http://www.mozilla.org/products/mozilla1.x/sysreq.html"> Mozilla
System Requirements</a><br />

<a target="_blank"  class="external_link"
href="http://www.mozilla.org/products/mozilla1.x/">
Download Mozilla</a></p>

<p><a target="_blank"  class="external_link"
href="http://www.mozilla.com/firefox/system-requirements.html"> Firefox
System Requirements</a><br />

<a target="_blank" class="external_link"
href="http://www.mozilla.com/firefox/all.html">
Download Firefox</a></p>

<p>Netscape Navigator 8.0 runs on:</p>

<ul>
 <li>Windows XP</li>
 <li>Windows 2000</li>
 <li>Windows 98 SE, ME</li>
</ul>

<p><a target="_blank" class="external_link"
href="http://www.netscape.ca/browser/">
Download Netscape Navigator</a> <br /></p>

</div>

<div class="update">
Last updated: Sat 22 Sep 06
</div>

</div>

<img id="top_logo" src="<?php echo $SHARED_IMAGES ?>/site-logo" alt="site-logo" />

<div id="top_link_bar">
<?php require "$SHARED_INCS/top_link_bar.php"; ?>
</div>

<div id="left_column">
 <?php require "$MODULE_PATH/home-menu.php" ?>
</div>

<div id="copyright">
 <?php require "$SHARED_INCS/copyright.php" ?>
</div>

</body>
</html>
