<?php require "../../shared/incs/site-config.php"; ?>
<?php require "$MODULE_CONFIG/module-example2.conf.php"; ?>

<?php $META_KEYWORDS = '*keywords* meta information - 
 may span multiple lines'; ?>

<?php $META_DESCRIPTION = '*description* meta information - 
 may span multiple lines'; ?>

<?php $MODULE_NAME = "$sitename - 3 Column page template"; ?>

<?php require "$SHARED_INCS/page-head.php"; ?>

<body>

<div id="main_window_3col">
  <?php require "./3-column-page.cont.php" ?>
</div>

<img id="top_logo" src="<?php echo $SHARED_IMAGES ?>/site-logo" alt="site-logo" />

<div id="top_link_bar">
  <?php require "$SHARED_INCS/top_link_bar.php"; ?>
</div>

<div id="left_column">
  <?php require "$MODULE_PATH/module-example2-menu.php" ?>
</div>

<div id="right_column">
  <?php require "$MODULE_PATH/module-example2-right-menu.php" ?>
</div>

<div id="copyright">
  <?php require "$SHARED_INCS/copyright.php" ?>
</div>

</body>
</html>
