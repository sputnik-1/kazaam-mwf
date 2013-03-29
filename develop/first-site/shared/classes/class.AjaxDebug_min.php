<?php

class AjaxDebug_min
  {


  // class constructor
  function AjaxDebug_min()
    {
    }


  function debug()
    {
$debug = <<<OUT

<h2>Using the HttpRequest Object - POST &amp; GET</h2>

<div class="box"><span class="boxheader">getAllResponseHeaders()</span>
<div id="x1">Default Value</div>
<button onclick="xmlPOST('data2.php', 1, 1)">send POST request1</button>&nbsp;&nbsp;
<button onclick="xmlPOST('data3.php', 1, 2)">send POST request2</button>&nbsp;&nbsp;
<button onclick="xmlPOST('data4.php', 1, 3)">send POST request3</button>&nbsp;&nbsp;

<button onclick="xmlGET('data5.php?method=GET&name=Brian&email=bryn@example.com&weight=12st 5lbs&drivers_license=Yes',1)">send GET request</button>
</div>

<div class="box"><span class="boxheader">status</span>
<pre id="x2">Default Value</pre>
</div>

<div class="box"><span class="boxheader">statusText</span>
<pre id="x3">Default Value</pre>
</div>

<div class="box"><span class="boxheader">readyState</span>
<pre id="x4">Default Value</pre>
</div>

<div class="box"><span class="boxheader">Static Content</span>
<pre id="static">This content should not change</pre>
</div>

<div class="box" id="rt"><span class="boxheader">responseText</span>
<pre id="x6">Default Value</pre>
</div>

<div class="box"><span class="boxheader">Static Content</span>
<pre id="static">This content should not change</pre>
</div>
OUT;
    return $debug;
    }

  }// class end
?>
