<?php require "../../shared/incs/site-config.php"; ?>
<?php require "$MODULE_CONFIG/new-module.conf.php"; ?>

<?php $META_KEYWORDS = '*keywords* meta information -
 may span multiple lines'; ?>

<?php $META_DESCRIPTION = '*description* meta information -
 may span multiple lines'; ?>

<?php $MODULE_NAME = "$sitename - New Module - 1 Column page template"; ?>

<?php require "$SHARED_INCS/page-head.php"; ?>

<body>

<div id="single_column">
  <?php require "./1-column-page.cont.php" ?>
</div>

<img id="top_logo" src="<?php echo $SHARED_IMAGES ?>/site-logo" alt="site-logo" />

<div id="top_link_bar">
<?php require "$SHARED_INCS/top_link_bar.php"; ?>
</div>

<div id="copyright">
 <?php require "$SHARED_INCS/copyright.php" ?>
</div>

</body>
</html>
