<?php require "../../shared/incs/site-config.php"; ?>
<?php  require "$MODULE_CONFIG/sports-cars.conf.php";  ?>

<?php $META_KEYWORDS = '*keywords* meta information -
 may span multiple lines'; ?>

<?php $META_DESCRIPTION = '*description* meta information -
 may span multiple lines'; ?>

<?php $MODULE_NAME = "$sitename - sports-cars - Home"; ?>

<?php require "$SHARED_INCS/page-head.php"; ?>

<body>

<div id="main_window_2col">

<div class="box2">
<h3>sports-cars Home</h3>
</div>

<div class="box2">

<p>Here is a collection of really nice high performance sports 
cars, designed to be used on the public highway. I hope to add to
this part of the website as more of these cars are found.</p>

</div>

<div class="update">
Last updated: Mon 08 Dec 08
</div>

</div>

<img id="top_logo" src="<?php echo $SHARED_IMAGES ?>/site-logo" alt="site-logo" />

<div id="top_link_bar">
<?php require "$SHARED_INCS/top_link_bar.php"; ?>
</div>

<div id="left_column">
 <?php require "$MODULE_PATH/sports-cars-menu.php" ?>
</div>

<div id="copyright">
 <?php require "$SHARED_INCS/copyright.php" ?>
</div>

</body>
</html>
