<?php

class PostVarDebug
{

public $DEBUG_POST;

function PostVarDebug($dbug = 'NoDebug')
// class constructor
/** call with $debug = &new PostVarDebug('DEBUG'); to turn on class debugging **/
  {
  if (isset($_SESSION['debug_post']))
    {
    if ($_SESSION['debug_post']) $this->DEBUG_POST = TRUE; 
    if (!$_SESSION['debug_post']) $this->DEBUG_POST = FALSE; 
    }

  if ('DEBUG' == $dbug) $this->DEBUG_POST = TRUE;
  // if ('DEBUG' != $dbug) $this->DEBUG = FALSE;

  $this->post_vars();
  }


function post_vars()
  {
  if ($this->DEBUG_POST)
    {
    echo "contents of \$_REQUEST array <br />";
    while(list($key, $value) = each($_REQUEST))
      {
      echo "$key: $value <br />";
      }

    echo "<br />contents of \$_POST array <br />";
    while(list($key, $value) = each($_POST))
      {
      echo "$key: $value <br />";
      }

    echo "<br />contents of \$_GET array <br />";
    while(list($key, $value) = each($_GET))
      {
      echo "$key: $value <br />";
      }

    echo "<br />contents of \$_SESSION array <br />";
    while(list($key, $value) = each($_SESSION))
      {
      echo "$key: $value <br />";
      }
    }
  }


}// class end
?>

