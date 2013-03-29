<?php

/*
file-id: session.funcs.php

include file for custom session handling routines

based on Matt Wade's session class at
http://www.zend.com/zend/spotlight/code-gallery-wade8.php

Rewrite this to use SQLite database instead.

CREATE TABLE sessions (
  ID int(11) NOT NULL auto_increment,
  ses_id varchar(32) NOT NULL default '',
  ses_time int(11) NOT NULL default '0',
  ses_start int(11) NOT NULL default '0',
  ses_data text NOT NULL,
  UNIQUE KEY ID (ID)
) TYPE=MyISAM AUTO_INCREMENT=1 ;
*/

/* set to 'Y' to turn on session debug code,
   or something else to turn off debug code */

   $debug = 'N'; // general session debugging
   $debug_con = 'NO'; //debugs session connection to mysql

/* Define the mysql table you wish to use with these functions
   this table MUST exist. */

   $ses_table = "sessions";

/* Change to 'Y' if you want to connect to a db in
 the z_open function */

   $mysql_conn = "Y";

/* Configure the info to connect to MySQL, only required
   if $mysql_conn is set to 'Y' */

   $db_host = "localhost";
   $db_user = "mysql-username";
   $db_pass = "mysql-password";
   $db_dbase = "web_app_tester";

/* Create a connection to a database */
function mysql_reconnect()
{
  global $db_host, $db_user, $db_pass, $db_dbase, $debug, $debug_con;

  if ($debug_con == 'Y') {
   echo "mysql_reconnect() <BR>";
   echo "db_host: $db_host <BR>";
   echo "db_user: $db_user <BR>";
   echo "db_pass: $db_pass <BR>";
   echo "db_dbase: $db_dbase <BR>";
  }

  $connect = mysql_connect($db_host, $db_user, $db_pass);

  $mysql_db = mysql_select_db($db_dbase);

  if (!$connect || !$mysql_db)
  {
    return FALSE;
  }
  else
  {
    return TRUE;
  }
}


/* Open session, if you have your own db connection code,
   put it in here */

function z_open($path, $name)
{
  global $mysql_conn, $debug;

  if ($debug == 'Y') echo "<P>open_session() <BR>";
  
  if ($mysql_conn == "Y") mysql_reconnect();
  return TRUE;
}


/* Close session */
function z_close()
{
  global $debug;

  if ($debug == 'Y') echo "<P>close_session() <BR>";

  mysql_reconnect();

  /* This is used for a manual call of the session gc function */
  z_gc(0);
  return TRUE;
}


/* Read session data from database */
function z_read($ses_id)
{
  global $ses_table, $debug;

  if ($debug == 'Y') echo "<P>read_session() <BR>";

  mysql_reconnect();

  $session_sql = "SELECT * FROM " . $ses_table
               . " WHERE ses_id = '$ses_id'";

  if ($debug == 'Y') 
  echo "session_read: $session_sql <BR>";

  $session_res = mysql_query($session_sql);

  if (!$session_res) return '';

  $session_num = mysql_num_rows($session_res);
  if ($session_num > 0)
  {
    $session_row = mysql_fetch_assoc($session_res);
    $ses_data = $session_row["ses_data"];
    return $ses_data;
  }
  else
  {
    return '';
  }
}


/* Write new data to database record */
function z_write($ses_id, $data)
{
  global $ses_table, $debug;

  if ($debug == 'Y') echo "<P>write_session() <BR>";

  mysql_reconnect();

  // is there already a record for this session in the database ?
  $session_chk = "SELECT * FROM " . $ses_table
               . " WHERE ses_id = '$ses_id'";

  if ($debug == 'Y')
  echo "session_chk: $session_chk <BR>";

  $session_res = mysql_query($session_chk);

  $result = mysql_fetch_array($session_res);

  // yes there is
  if ($result)
  {
    $session_write_update = "UPDATE " . $ses_table
                          . " SET ses_time = '" . time()
                          . "', ses_data = '$data' WHERE ses_id = '$ses_id'";

    if ($debug == 'Y')
    echo "session_write_update: $session_write_update <BR>";

    $session_res = mysql_query($session_write_update);
    if ($session_res) return TRUE;
  }
  else
  {
    // no - create a new record
    $session_write_insert = "INSERT INTO " .$ses_table. " SET".
                            " ses_id    = '" .$ses_id ."',".
                            " ses_time  = '" .time()  ."',".
                            " ses_start = '" .time()  ."',".
                            " ses_data = '" .$data   ."'";

    if ($debug == 'Y')
    echo "session_write_insert: $session_write_insert <BR>";

    $session_res = mysql_query($session_write_insert);
    if ($session_res) return TRUE;
  }

  if (!$session_res)
  {
    return FALSE;
  }
  else
  {  
    return TRUE;
  }
}


/* Destroy session record in database */
function z_destroy($ses_id)
{
  global $ses_table, $debug;

  if ($debug == 'Y') echo "<P>destroy_session() <BR>";

  mysql_reconnect();

  $session_sql = "DELETE FROM " . $ses_table
               . " WHERE ses_id = 'ses_id'";

  $session_res = mysql_query($session_sql);
  if (!$session_res)
  {
    return FALSE;
  }
  else
  {
    return TRUE;
  }
}


/* Garbage collection, deletes old sessions */
function z_gc($ses_life)
{
  global $ses_table, $debug;

  if ($debug == 'Y') echo "<P>gc_session() <BR>";

  mysql_reconnect();

  $ses_life = strtotime("-5 minutes");

  $session_sql = "DELETE FROM " . $ses_table
               . " WHERE ses_time < $ses_life";

  $session_res = mysql_query($session_sql);

  if (!$session_res)
  {
    return FALSE;
  }
  else
  {
    return TRUE;
  }
}

session_set_save_handler ("z_open", "z_close", "z_read", "z_write",
                          "z_destroy", "z_gc");

?>
