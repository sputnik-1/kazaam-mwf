<?php require "../../shared/incs/site-config.php"; ?>
<?php require "$MODULE_CONFIG/home.conf.php"; ?>

<?php $META_KEYWORDS = '*keywords* meta information -
 may span multiple lines'; ?>

<?php $META_DESCRIPTION = '*description* meta information -
 may span multiple lines'; ?>

<?php $MODULE_NAME = "$sitename - 2 Column page template"; ?>

<?php require "$SHARED_INCS/page-head.php"; ?>

<body>

<div id="main_window_2col">

<div class="box2">
<h3>2 Column page template with integrated page contents</h3>
</div>

<div class="box2">
<p>Unless otherwise stated, all website code and content on this website is
Copyright &copy; 2007 Keith A. Roberts.</p>

<p>All articles featured on this site are the copyright of the original
author(s), unless stated otherwise on that article.</p>

<p>Copyright notices for other material used on this site can be found
under

<a href="<?php echo $WEBSITE_ROOT ?>/home/anyuser/credits.php"
 class="finished"
>Credits</a></p>
</div>

<div class="update">
Last updated: Fri 23 Feb 07
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
