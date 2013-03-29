<?php

class AjaxDebug
  {


  // class constructor
  function AjaxDebug()
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


<div class="box"><span class="boxheader">Form Input</span>
<pre id="x5">

<form name="ajax_testform1" onsubmit="return false"> 
<h3 class="center">Passing form values using XMLHttpRequest</h3>

<button onclick="sendForm(this.form, 'data6.php', 1, false)">submit</button>

<div class="control_box">
<h3 class="center">Text type input fields</h3>
<label>string1:<input type="text" class="string" name="string1" value="hello world" onchange="checkString(this)" /></label> 
<label>email1:&nbsp;<input type="text" class="email" name="email1" value="me@myhost.net" onchange="checkEmail(this)" /></label> 
<label>date1:&nbsp;&nbsp;<input type="text" class="date" name="date1" value="2001-12-01" onchange="checkDate(this)" /></label> 
<label>phone1:&nbsp;<input type="text" class="phone" name="phone1" value="0845-123456" onchange="checkPhone(this)" /></label> 
<label>int1:&nbsp;&nbsp;&nbsp;<input type="text" class="int" name="int1" value="12345" onchange="checkInt(this)" /></label>
<label>real1:&nbsp;&nbsp;<input type="text" class="real" name="real1" value="177.245" onchange="checkReal(this)" /></label> 
</div>

<div class="control_box">
<h3 class="center">Password type input field</h3>
<label>password1:&nbsp;&nbsp;<input type="password" name="password1" value="123456789" onchange="checkPassword(this)" /></label> 
</div>

<div class="control_box">
<h3 class="center">Radio buttons Group1</h3>
<label>button1:<input type="radio" name="radio_group1" value="button1" checked /></label>
<label>button2:<input type="radio" name="radio_group1" value="button2" /></label>
<label>button3:<input type="radio" name="radio_group1" value="button3" /></label>
</div>

<div class="control_box">
<h3 class="center">Radio buttons Group2</h3>
<label>button4:<input type="radio" name="radio_group2" value="button4" checked /></label>
<label>button5:<input type="radio" name="radio_group2" value="button5" /></label>
<label>button6:<input type="radio" name="radio_group2" value="button6" /></label>
</div>

<div class="control_box">
<h3 class="center">Checkbox controls</h3>
<label>checkbox1:<input type="checkbox" name="checkbox1" value="TRUE" /></label>
<label>checkbox2:<input type="checkbox" name="checkbox2" value="TRUE" checked /></label>
<label>checkbox3:<input type="checkbox" name="checkbox3" value="TRUE" /></label>
</div>

<div class="control_box">
<h3 class="center">Textarea input field</h3>
<textarea name="textarea1" onchange="checkTextArea(this)" rows="5" cols="40">
First line of initial text.
Second line of initial text.</textarea>
</div>

<div class="control_box">
<h3 class="center">Single Selection List</h3>
<select name="single_select1" onchange="checkSingleSelect(this)">
<!--  <option value="nothing_selected" selected>please choose</option> -->
  <option value="sng1_opt1" selected>sng1_opt1</option>
  <option value="sng1_opt2">sng1_opt2</option>
  <option value="sng1_opt3">sng1_opt3</option>
  <option value="sng1_opt4">sng1_opt4</option>
  <option value="sng1_opt5">sng1_opt5</option>
</select>
</div>

<div class="control_box">
<h3 class="center">Multiple Selection List</h3>
<select multiple name="multi_select1" onchange="checkMultiSelect(this)">
<!--  <option value="nothing_selected" selected>please choose</option> -->
  <option value="mult1_opt1">mult1_opt1</option>
  <option value="mult1_opt2">mult1_opt2</option>
  <option value="mult1_opt3" selected>mult1_opt3</option>
  <option value="mult1_opt4">mult1_opt4</option>
  <option value="mult1_opt5">mult1_opt5</option>
</select>
</div>

</form>
</pre>
</div>

<div class="box"><span class="boxheader">Static Content</span>
<pre id="static">This content should not change</pre>
</div>
OUT;
    return $debug;
    }

  }// class end
?>
