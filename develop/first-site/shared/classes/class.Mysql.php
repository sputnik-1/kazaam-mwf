<?php

class Mysql
    {
    public $hostname, $username, $password, $dbname, $dbcon1;

    // class constructor
    function Mysql($hostname, $username, $password, $dbname)
        {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
        $this->connect();
        $this->select_db();
        }

    function connect()
        {
        if (!$this->dbcon1 = mysql_connect($this->hostname, 
                                 $this->username, $this->password))
            {
            die("<br />Could not connect to server" . mysql_error());
            }
        }

    function select_db()
        {
        if (!mysql_select_db($this->dbname, $this->dbcon1))
            {
            die("<br />Could not select database" . mysql_error());
            }
        }

    function query($sql_query)
        {
        if (!$result = mysql_query($sql_query, $this->dbcon1))
            {
            die("<br />sql query failed: " . mysql_error());
            }
            return $result;
        }

    function affected_rows()
        {
        $result = mysql_affected_rows($this->dbcon1);
        return $result;
        }

    function result($sql_query)
        {
        $result = mysql_result($sql_query, 0, 0);
        return $result;
        }

    function insert_id()
        {
        $result = mysql_insert_id();
        return $result;
        }

    function fetch_array($res)
        {
        $result = mysql_fetch_array($res);
        return $result;
        }

    }
?>
