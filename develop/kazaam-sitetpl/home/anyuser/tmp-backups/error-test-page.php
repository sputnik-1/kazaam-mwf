<?php require "../../shared/incs/site-config.phpZZZ"; ?>
<?php require "$MODULE_CONFIG/home.conf.php"; ?>

<?php $META_KEYWORDS = '*keywords* meta information - 
 may span multiple lines'; ?>

<?php $META_DESCRIPTION = '*description* meta information - 
 may span multiple lines'; ?>

<?php $MODULE_NAME = "$sitename - Home"; ?>

<?php require "$SHARED_INCS/page-head.php"; ?>

<body>

<div id="main_window_3col">
  <?php require "$MODULE_PATH/home-main.php" ?>
</div>

<img id="top_logo" src="<?php echo $SHARED_IMAGES ?>/site-logo" alt="site-logo" />

<div id="top_link_bar">
  <?php require "$SHARED_INCS/top_link_bar.php"; ?>
</div>

<div id="left_column">
  <?php require "$MODULE_PATH/home-menu.php" ?>
</div>

<div id="right_column">
  <?php require "$MODULE_PATH/home-right-menu.php" ?>
</div>

<div id="copyright">
  <?php require "$SHARED_INCS/copyright.php" ?>
</div>

</body>
</html>
