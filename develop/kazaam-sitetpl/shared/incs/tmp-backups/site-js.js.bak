// kazaam-sitetpl global website javascript file
// file-id: /kazaam-sitetpl/shared/incs/site-js.js

// This file is included by page-head.php
// and applies to all pages in a particular website.

// toggles debug alert boxes on or off.
var BROWSER_DEBUG = false;


function show_item(item) {
  // item is the id="id_name" of a div element
  document.getElementById(item).style.display = 'block';
}


function hide_item(item) {
  // item is the id="id_name" of a div element
  document.getElementById(item).style.display = 'none';
}


var maxHeight = 0;
var leftColDefHeight = 0;

function hightLightActiveLink()
{
  // highlight active link to currently loaded page
  numLinks = document.links.length;

  for(var sal = 0; sal < numLinks; sal++)
  {
    link = document.links[sal];
    if (link.href == document.URL)
    {
      if (link.className != 'footnote')
      {
        // link.style.fontWeight = 'bold';
        link.style.color = 'white';
        // link.style.border = '1px solid white';
      }
    }
  }
}


function initForms() 
{
  // formname(s) to initialise at page load time
  if (document.forms.length > 0)
  {
    initFormDefs();
  }
  else
  {
    // if (DEBUG) alert("there are no forms on this page");
  }
}


function onPageLoad(newAction) {
  if ('function' == typeof window.onload) {
    var prevActions = window.onload;
    window.onload = function() {
    prevActions();
    newAction();
    }
  }
  else {
    window.onload = newAction;
  }
}


// layout3.js
// Cross-Browser.com & SitePoint.com - Equal Column Height Demo (3 Column)

if (document.getElementById || document.all) {
  // minimum dhtml support required
  onPageLoad(winOnLoad);
}


function winOnLoad()
{
  // ie browser check - no longer used
  if ( xIE4Up ) {
    browserWarning();
  }
  else {
    var ele = xGetElementById('left_column');
    // another compatibility check
    if (ele && xDef(ele.style, ele.offsetHeight)) {
      setDefaultColumnSizes();
      xAddEventListener(window, 'resize', winOnResize, false);
    }
    resizeTopLogo();
    //hightLightActiveLink();
    // initialise form default styles
    // initForms();
  }
}


function browserWarning() {
  setDefaultColumnSizes();
  resizeTopLogo();
}


function winOnResize()
{
  setDefaultColumnSizes();
}


function setDefaultColumnSizes()
/**
this function calculates the correct default sizes for all multiple
columns of a page's layout. resizeColumns() lives in ajax-core.js, and
is used to resize colums after the size of the AJAX output window is
changed dynamically via sucessfull AJAX requests.
**/
{
  // get natural heights
  var leftColDefHeight = xHeight("left_column");
  var lHeight = leftColDefHeight;
  var main2Height = xHeight("main_window_2col");
  var main3Height = xHeight("main_window_3col");
  var rHeight = xHeight("right_column");

  // find the maximum height
  var maxHeight1 = Math.max(main2Height, Math.max(lHeight, rHeight));
  var maxHeight2 = Math.max(main3Height, Math.max(lHeight, rHeight));
  var maxHeight  = Math.max(maxHeight1, maxHeight2);

  // add a bit more to the length of the resized columns
  // to create some padding-bottom for left_column content
  // and the update div

  // 2 column layout
  if (lHeight > main2Height) {
    maxHeight = maxHeight + 2;
  }
  else if (main2Height > lHeight) {
    maxHeight = maxHeight + 35;
  }
  else if (main2Height == lHeight) {
    maxHeight = maxHeight + 15;
  }

  // 3 column layout
  if (lHeight > main3Height) {
    maxHeight = maxHeight + 2;
  }
  else if (main3Height > lHeight) {
    maxHeight = maxHeight + 35;
  }
  else if (main3Height == lHeight) {
    maxHeight = maxHeight + 15;
  }

  // assign maximum height to all columns
  xHeight("left_column", maxHeight);
  xHeight("main_window_2col", maxHeight);
  xHeight("main_window_3col", maxHeight);
  xHeight("right_column", maxHeight);
  
  // show the copyright
  xShow("copyright");
}


function resizeTopLogo()
// resize the top logo to span the width of the page body
// konquorer can't resize the logo using the right: property

{
  // get the width of the body element in pixels
  var bodyWidth = xClientWidth("body");

  // calculate the width for the top_logo
  var newLogoWidth = Math.round(parseFloat(bodyWidth)) - 11;

  // single column hack - dec by 1
  var oneCol = xGetElementById('single_column');
  if (oneCol) newLogoWidth --;

  // convert the above integer value back into a string
  // and append 'px' to it as well
  var newLogoWidthStr = newLogoWidth.toString() + 'px';

  // set the width of top_logo
  var elem = document.getElementById("top_logo");
  elem.style.width = newLogoWidthStr;

  // also set the width of the top_link_bar
  var link_bar = document.getElementById("top_link_bar");
  link_bar.style.width = newLogoWidthStr;

}

// end of site-js.js

