<?php

class SiteAdmin
    {

    var $debug_val = ''; // set to '' to turn OFF class debug code
                         // - anything else turns debugging on

    // sa_username & sa_password are predefined global variables
    // and are set in shared/incs/admin-details.php.php file
    var $sa_username, $sa_password;

    //logon admin username and password
    var $logon_username, $logon_password;

    // class constructor
    function SiteAdmin($sa_username, $sa_password,
                       $logon_username = '', $logon_password = '')
        {
        $this->sa_username = $sa_username;
        $this->sa_password = $sa_password;
        $this->logon_username = $logon_username;
        $this->logon_password = $logon_password;

        //-------------------------------------------------
        if ($this->debug_val)
            {
            echo "constructor SiteAdmin<br />";
            echo "logon_username = '$this->logon_username' <br />";
            echo "logon_password = '$this->logon_password' <br />";
            echo "sa_username = '$this->sa_username' <br />";
            echo "sa_password = '$this->sa_password' <br />";
            }
        //-------------------------------------------------

        }


    function logon_form()
        {

        $admin_details = <<<OUT

<div class="admin_logon">
<h3>Admin Logon</h3>

<form action="./site-admin2.php" method="post">

<span class="even">Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="logon_username" maxlength="60"></span>

<span class="odd">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="logon_password" maxlength="60"></span>


<input type="submit" value="Logon">&nbsp;&nbsp;&nbsp;&nbsp;

</form>
</div>
<br />
OUT;
        return $admin_details;
        }


    function logon_check()
        {
        if  ($this->logon_username <> $this->sa_username
            OR
            $this->logon_password <> $this->sa_password)
            {
            echo '<p class="center">Incorrect username or password!<br />'.
                 'Please try again</p>';
            echo $this->logon_form();
            exit();
            }
        else
            {
            echo '<p class="center">You are now logged in as site '.
                 'administrator <br />'.
            'please <a href="site-admin3.php">click here</a> to continue</p>';
            }
        }


    function page_check()
        {
        //-------------------------------------------------
        if ($this->debug_val)
            {
            echo "<br />function page_check<br />";
            echo "logon_username = '$this->logon_username' <br />";
            echo "logon_password = '$this->logon_password' <br />";
            echo "sa_username = '$this->sa_username' <br />";
            echo "sa_password = '$this->sa_password' <br />";
            }
        //-------------------------------------------------

        if  ($this->logon_username <> $this->sa_username
            OR
            $this->logon_password <> $this->sa_password)
            {
            echo '<br /><p class="center">You need to login as Site Administrator<br />'.
                 'to access this page</p>';
            echo $this->logon_form();
            exit();
            }
        }


    function dummy()
        {
        }

    }
?>
