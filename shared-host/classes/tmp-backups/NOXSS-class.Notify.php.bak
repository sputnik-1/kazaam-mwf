<?php

class Notify {

  // private $DEBUG = true;
  private $DEBUG = false;

  private $remote_address;
  private $hostname;
  private $server_protocol;
  private $request_uri;
  private $query_string;
  private $http_user_agent;
  private $subject;
  private $message;


// $query_string = $_SERVER["QUERY_STRING"];


  public function __construct() {
    // echo "In Notify  constructor <br />";
    $this->remote_address = $_SERVER['REMOTE_ADDR']. "\r\n\r\n";
    $this->hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']). "\r\n\r\n";
    $this->server_protocol = $_SERVER['SERVER_PROTOCOL'] . "\r\n\r\n";
    $this->request_uri = $_SERVER['REQUEST_URI'] . "\r\n\r\n";
    $this->query_string = $_SERVER['QUERY_STRING'] . "\r\n\r\n";
    $this->http_user_agent = $_SERVER['HTTP_USER_AGENT'] . "\r\n\r\n";
    $this->subject = 'www.karsites.net homepage visited';

    $this->message = "Remote Address: " . $this->remote_address;
    $this->message .= "Remote Hostname: " .$this->hostname;
    $this->message .= "Server Protocol: " .$this->server_protocol;
    $this->message .= "Request URI: " . $this->request_uri;
    $this->message .= "Query String: " . $this->query_string;
    $this->message .= "User Agent: " . $this->http_user_agent;
    
    if ($this->DEBUG) $this->showValues();
  }


  function showValues() {
    // echo "In showValues() <br />";
    echo "Remote Address: " . $this->remote_address. "<br />";
    echo "Remote Hostname: " .$this->hostname. "<br />";
    echo "Server Protocol: " .$this->server_protocol. "<br />";
//    echo "HTTP Referer: " .$this->http_referer. "<br />";
    echo "Request URI: " . $this->request_uri. "<br />";
    echo "Query String: " . $this->query_string. "<br />";
    echo "User Agent: " . $this->http_user_agent. "<br />";
    echo "Subject: " . $this->subject. "<br />";
    echo "<br />Message: <br />" . $this->message. "<br />";
  }


//--------------------------------------------------------

  function notify_me($subject) {
    $to = 'keith@karsites.localdomain';

    $headers = 'From: webmaster@karsites.net' . "\r\n" .
        'Reply-To: webmaster@karsites.net' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $this->message, $headers);

    // set this to debug $this->query_string
    // $this->query_string = "";

    $this->url_check($this->query_string);


    /*
    if ( mail($to, $subject, $this->message, $headers) ) {
      echo "mail sent OK!";
    }
    else {
      echo "Problem sending mail - :(";
    }
    */
  }


  function url_check($url_string)
  {
   $url_string = strip_tags($url_string);

   if ( "" != trim($url_string) )
   {
    echo '<p> Passing of variables by URL query string is not supported! <br />'.
         'Application terminating now - Please try again without XSS </p>';

    echo "<p> Found in URL -> '" .$url_string. "'</p>";
    exit();
   }
  }

}
?>
