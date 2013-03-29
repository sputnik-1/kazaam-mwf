<?php require "../../shared/incs/site-config.php"; ?>
<?php require "$MODULE_CONFIG/fedora-services.conf.php"; ?>

<?php $META_KEYWORDS = '*keywords* meta information -
 may span multiple lines'; ?>

<?php $META_DESCRIPTION = '*description* meta information -
 may span multiple lines'; ?>
	
<?php $MODULE_NAME .= " - Overview"; ?>

<?php require "$SHARED_INCS/page-head.php"; ?>

<body>

<div id="main_window_2col">

<div class="box2">
<h3>Fedora 8 System Services Overview</h3>
</div>

<div class="box2">

<p>This is an overview of all the system services that are installed by
default with Fedora 8.</p>

</div>

<div class="update">
Last updated: Mon 22 Oct 07
</div>

</div>

<img id="top_logo" src="<?php echo $SHARED_IMAGES ?>/site-logo" alt="site-logo" />

<div id="top_link_bar">
<?php require "$SHARED_INCS/top_link_bar.php"; ?>
</div>

<div id="left_column">
 <?php require "$MODULE_PATH/fedora-services-menu.php" ?>
</div>

<div id="copyright">
 <?php require "$SHARED_INCS/copyright.php" ?>
</div>

</body>
</html>
