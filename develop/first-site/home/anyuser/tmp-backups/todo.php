<?php require "../../shared/incs/site-config.php"; ?>
<?php /* require "$MODULE_CONFIG/todo.conf.php"; */ ?>

<?php $META_KEYWORDS = '*keywords* meta information -
 may span multiple lines'; ?>

<?php $META_DESCRIPTION = '*description* meta information -
 may span multiple lines'; ?>

<?php $MODULE_NAME = "$sitename - Todo"; ?>

<?php require "$SHARED_INCS/page-head.php"; ?>

<body>

<div id="main_window_2col">

<div class="box2">
<h3>ToDo list</h3>
</div>

<div class="box2">
<p>A few things I need to get my head around - in no particular order.</p>

<span class="subheading">The GIMP</span>
<span class="subheading">OOP Design Patterns</span>

<br />

<p>
<span class="subheading">Advanced Bash Scripting</span>
<span class="subheading">Python</span>
<span class="subheading">Java</span>
<?php /* <span class="subheading">Subversion - SVN</span> */ ?>
</p>

</div>

<div class="update">
Last updated: Thu 28 Mar 2013
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
