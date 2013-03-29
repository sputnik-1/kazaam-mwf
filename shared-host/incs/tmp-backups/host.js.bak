// /shared-host/incs/host.js

// last updated: Mon Apr 23 19:06:29 BST 2007

function showMaintenanceMesg() {
// dynamically create a global site maintenance message
// and insert it at the top of each page as it loads.
// This will appear on all pages of all virtual websites!

  d = document;
  
  // create the element
  var msg_div = d.createElement("div");
    
  // give it an id attribute
  msg_div.setAttribute("id", "site_maintenance");

  // create the text message
  var msg_text = "The site may be offline overnight occasionally, <br />"
      + " due to memory upgrades being added to the server, <br />"
      + " and tests being run overnight on that memory.<br />";
//    + " This is due to a  essential O/S upgrade.";

  // put it into the div element
  msg_div.innerHTML = msg_text;

  // is the current loaded page a single column page?
  if (d.getElementById("single_column")) {
    var main_page = d.getElementById("single_column");

    // insert the maintenance element at the top of the page
    main_page.insertBefore(msg_div,main_page.firstChild);
  }

  // is the current loaded page a 2 column page?
  if (d.getElementById("main_window_2col")) {
    var main_page = d.getElementById("main_window_2col");

    // insert the maintenance element at the top of the page
    main_page.insertBefore(msg_div,main_page.firstChild);
  }

  // is the current loaded page a 3 column page?
  if (d.getElementById("main_window_3col")) {
    var main_page = d.getElementById("main_window_3col");

    // insert the maintenance element at the top of the page
    main_page.insertBefore(msg_div,main_page.firstChild);
  }

  // reset the column sizes
  setDefaultColumnSizes();
}


// Un-comment the onPageLoad() line below to activate the maintenance message
// in function showMaintenanceMesg() above.
// Comment it out again to disable the DHTML message generation.

// onPageLoad(showMaintenanceMesg);

// end of file
