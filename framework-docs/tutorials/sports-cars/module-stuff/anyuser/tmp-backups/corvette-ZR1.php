<?php require "../../shared/incs/site-config.php"; ?>
<?php require "$MODULE_CONFIG/sports-cars.conf.php"; ?>

<?php $META_KEYWORDS = '*keywords* meta information -
 may span multiple lines'; ?>

<?php $META_DESCRIPTION = '*description* meta information -
 may span multiple lines'; ?>

<?php $MODULE_NAME = "$sitename - sports-cars - Corvette ZR1"; ?>

<?php require "$SHARED_INCS/page-head.php"; ?>

<body>

<div id="main_window_2col">

<img
 class="sports_cars_img"
 src="<?php echo $LOCAL_IMAGES ?>/corvette_ZR1-1.jpg"
 alt="Corvette ZR1"
/>

<div class="box2">

<h3>Corvette ZR1 Sports Car</h3>

<p>The new 2009 Corvette ZR1 is a fast and powerful sports car. It has a
6.2-liter surpercharged engine with 638hp. The acceleration of 0-60mph
time of just 3.4 seconds will make it reach reach 100mph from standstill
in 7 seconds flat.</p>

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
