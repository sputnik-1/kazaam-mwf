<?php
 // database session management code
 // require "$SHARED_INCS/session.funcs.php";
 // session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>

<title><?php echo $MODULE_NAME ?></title>

<?php require "$CONFIG_PATH/meta-info.php"; ?>

<!-- ================================================ -->
<!-- files common to this particular website only -->

<script type="text/javascript"
  src="<?php echo $SHARED_INCS ?>/site-js.js">
</script>

<?php /* for development purposes only */ ?>
<style type="text/css">
  <?php require "$SITE_THEMES/site-css.php"; ?>
</style>

<?php /* for live pages only */ ?>
<!-- link rel="stylesheet" type="text/css"
href="<?php /* echo $SITE_THEMES */ ?>/site-css.css" / -->

<!-- ================================================ -->
<!-- files shared by all websites on this server -->

<style type="text/css">
  <?php require "$SHARED_HOST_INCS/host.css"; ?>
</style>

<script type="text/javascript"
  src="<?php echo $SHARED_HOST_INCS ?>/host.js">
</script>

<!-- ================================================ -->

<script type="text/javascript"
  src="<?php echo $SHARED_HOST_INCS ?>/x_core.js">
</script>

<script type="text/javascript"
  src="<?php echo $SHARED_HOST_INCS ?>/x_event.js">
</script>

<!-- ================================================ -->

</head>
