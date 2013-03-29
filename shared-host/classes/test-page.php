<?php

 require "NOXSS-class.Notify.php";

 $mail = new Notify();

 $subject = 'DEBUGGING - website tester homepage visited';

 $mail->notify_me($subject); 

?>

<html>

<head>
<title>XSS class.Notify tester</title>
</head>

<body>
<p>
If you can see this the page has continued to load OK!
</p>
</body>

</html>
