<?php require "../../shared/incs/site-config.php"; ?>
<?php require "$MODULE_CONFIG/sports-cars.conf.php"; ?>

<?php $META_KEYWORDS = '*keywords* meta information -
 may span multiple lines'; ?>

<?php $META_DESCRIPTION = '*description* meta information -
 may span multiple lines'; ?>

<?php $MODULE_NAME = "$sitename - sports-cars - Audi GT3"; ?>

<?php require "$SHARED_INCS/page-head.php"; ?>

<body>

<div id="main_window_2col">

<img
 class="sports_cars_img"
 src="<?php echo $LOCAL_IMAGES ?>/audi-GT3-1.jpg"
 alt="Audi GT3"
/>

<div class="box2">

<h3>Audi GT3 Sports Car Race Car</h3>

<p>Power for the Audi GT3 has been boosted to 500hp and the
engineers digged deep into the technics to conform with GT3
standards. The four-wheel-drive system had to be replaced with a
more conventional GT rear-wheel drive system and it is also
equipped with a newly developed six-speed sports sequential gear
box.</p>

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
