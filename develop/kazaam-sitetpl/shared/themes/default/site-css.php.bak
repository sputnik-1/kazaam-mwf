/* CSS rules - Kazaam Modular Website Framework 0.5.0 */

<?php

/* ------------------------------- */

// set the height property of the top_logo (site-logo)
$top_logo_HEIGHT = 80;
$top_logo_HEIGHT .= 'px';

// set the top property of the top_link_bar
// relative to the height of the top_logo
$top_link_bar_TOP = $top_logo_HEIGHT + 5;
$top_link_bar_TOP .= 'px';

// set the font-size of the top_link_bar
$top_link_bar_FONT_SIZE = 12;

// set the top of all columns below the top_link_bar to this offset
// need to adjust this when changing the font-size of the top_link_bar
$columns_top_offset = $top_link_bar_FONT_SIZE + 22;

// convert to px measurement
$top_link_bar_FONT_SIZE .= 'px';

// set the top property of the left_column
// relative to the height of the top_logo
$left_column_TOP = $top_logo_HEIGHT + $columns_top_offset;
$left_column_TOP .= 'px';

// set the margin-top property of the single_column
// relative to the height of the top_logo
$single_column_MARGIN_TOP = $top_logo_HEIGHT + $columns_top_offset;
$single_column_MARGIN_TOP .= 'px';

// set the margin-top property of the main_window_2col
// relative to the height of the top_logo
$main_window_2col_MARGIN_TOP = $top_logo_HEIGHT + $columns_top_offset;
$main_window_2col_MARGIN_TOP .= 'px';

// set the margin-top property of the main_window_3col
// relative to the height of the top_logo
$main_window_3col_MARGIN_TOP = $top_logo_HEIGHT + $columns_top_offset;
$main_window_3col_MARGIN_TOP .= 'px';

// set the top property of the right_column
// relative to the height of the top_logo
$right_column_TOP = $top_logo_HEIGHT + $columns_top_offset;
$right_column_TOP .= 'px';

// set the margin-top property of the copyright
$copyright_MARGIN_TOP = '3px';

?>

<?php /*
 #css_test_selector {
  top_logo_HEIGHT: <?php echo $top_logo_HEIGHT; ?>;
  top_link_bar_TOP: <?php echo $top_link_bar_TOP; ?>;
  top_link_bar_FONT_SIZE: <?php echo $top_link_bar_FONT_SIZE; ?>;
  left_column_TOP: <?php echo $left_column_TOP; ?>;
  main_window_2col_MARGIN_TOP: <?php echo $main_window_2col_MARGIN_TOP; ?>;
  main_window_2col_MARGIN_TOP: <?php echo $main_window_3col_MARGIN_TOP; ?>;
  copyright_MARGIN_TOP: <?php echo $copyright_MARGIN_TOP; ?>;
 }
*/ ?> 


 * {
  /* required for compatibility purposes */
  margin: 0; 
  padding: 0;
 }


 body {
  background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd9.jpg);
  background-position: center;
  background-attachment: fixed;
<?php /*  border: 1px solid yellow; */ ?>
 } 


 #top_logo {
  /* display: block; item is visible */
  /* display: none;  item is NOT visible */
  display: block;
  position: absolute;
  top: 5px;
  left: 5px;
  right: 5px;
  height: <?php echo $top_logo_HEIGHT; ?>;
  color: inherit;
  background: black;
  border: 1px solid white; 
 }


 #header {
  display: block;
  position: absolute;
  top: 85px;
  width: 98%;
  margin: 5px 5px;
  padding: 1px 0;
  font-family: fantasy;
  font-size: small;
  text-align: center;
  color: green;
  background: #ACDAE6;
  border: 1px solid white; 
 }


 #top_link_bar {
  display: block;
  position: absolute;
  /* higher z-index numbers have priority over lower numbers */
  z-index: 5;
  top: <?php echo $top_link_bar_TOP; ?>;
  left: 5px;
  right: 4px;

<?php /* height: 12px;
 the height of the top_link_bar adjusts itself to the same 
 height setting of the font-size pixel value 
*/ ?>

  margin-top: 5px;
  margin-bottom: 5px;
  padding: 1px 0px;
  font-family: sans;
  font-size: <?php echo $top_link_bar_FONT_SIZE; ?>;
  text-align: center;
  color: black;
  background: #375DB0;
  background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd4.jpg);
  border: 1px solid white; 
 }


 #top_link_bar a {
  display: none;
  text-decoration: underline;
  /* color: black; */
 }


 #top_link_bar a:hover {
  color: white;
  background: #00CCFF;
 }


 #menu_list li {
  display: inline;
  list-style-type: none;
  margin-bottom: 0px;
  background: #375DB0;
  background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd4.jpg);
  padding-left: 0px;
  padding-bottom: 0px;
 }


 #menu_list a {
  display: inline;
  padding-left: 2px;
  padding-right: 2px;
  
 }


 #left_column {
  /* display: block; item is visible */
  /* display: none;  item is NOT visible */
  display: block;
  position: absolute;
  top: <?php echo $left_column_TOP; ?>;
  left: 5px;
  width: 155px;
  color: inherit;
  background: #BDBEBD;
  /* background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd5.jpg); */
  border: 1px solid white;
 }


 /* anchor links in menus */
 #left_column a {
  display: block;
  margin: 5px 2px;
  padding: 0 5px;
  font-weight: normal;
  text-decoration: none;
 }


 #left_column a:hover {
  text-decoration: underline;
 }


 /* module home links in LH column module menus */
 #module_home_link  {
  display: block;
  margin: 5px 2px;
  padding: 0 5px;
  font-weight: normal;
  text-decoration: underline;
  color: white;
  background: inherit;
 }


 /* internal anchor links in menus */
 #left_column .internal_menu a {
  display: block;
  margin: 0px 2px;
  padding: 3px 3px 5px;
  line-height: 90%;
  font-weight: normal;
  text-decoration: none;
 }

 /* related site links in menus */
 #left_column .related_sites a {
  display: block;
  margin: 0px 2px;
  padding: 3px 3px 5px;
  line-height: 90%;
  font-weight: normal;
  text-decoration: none;
 }


 #left_column .related_sites a:hover {
  text-decoration: underline;
 }


 #right_column {
  /* display: block; item is visible */
  /* display: none;  item is NOT visible */
  display: block;
  position: absolute;
  top: <?php echo $right_column_TOP; ?>;
  left: auto;
  right: 4px;
  width: 156px;
  color: inherit;
  background: #BDBEBD;
  /* background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd5.jpg); */
  border: 1px solid white;
 }


 /* anchor links in menus */
 #right_column a {
  display: block;
  margin: 5px 2px;
  padding: 0px 5px 4%;
  font-weight: normal;
  text-decoration: none;
  line-height: 100%;
 }


 #right_column a:hover {
  text-decoration: underline;
 }


 /* link to external articles */
 .link_date {
  display: block;
  margin: -5px 2px 0px;
  padding: 1px 5px 7px;
  font-weight: normal;
  text-decoration: none;
  text-align: center;
  color: #8B4513;
  background-color: #8BBABA;
  line-height: 70%;
 }


 /* homepage articles */
 .article_heading {
  font-weight: bold;
  text-decoration: none;
  color: blue;
 }


 /* homepage articles */
 .article_date {
  margin-left: 20px;
  font-weight: normal;
  font-style: italic;
  text-decoration: none;
  color: green;
 }


 #single_column {
  margin-top: <?php echo $single_column_MARGIN_TOP; ?>;
  margin-left: 5px;
  margin-right: 5px;
  padding-top: 3px;
  padding-left: 5px;
  padding-right: 5px;
  color: inherit;
  background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd7.jpg);
  border: 1px solid white;
 }


 #main_window_2col {
  margin-top: <?php echo $main_window_2col_MARGIN_TOP; ?>;
  margin-left: 166px;
  margin-right: 4px;
  padding-left: 5px;
  padding-right: 5px;
  color: inherit;
  background: gray;
  background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd2.jpg);
  border: 1px solid white;
 }

 #main_window_3col {
  margin-top: <?php echo $main_window_3col_MARGIN_TOP; ?>;
  margin-left: 166px;
  margin-right: 166px;
  padding-left: 5px;
  padding-right: 5px;
  color: inherit;
  background: gray;
  background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd2.jpg);
  border: 1px solid white;
 }


 .box1 {
  margin-top: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
  margin-right: 0px;
  color: inherit;
  background: #838183;
  border: 1px solid black;
 }


 .box1 a:hover {
  color: inherit;
  background: #00CCFF;
 }


 .box2 {
  margin: 10px 0px;
  padding: 3px 5px 0px;
  color: inherit;
  background: #FFF2E0;
  background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd4.jpg);
  border: 1px solid black;
 }


 .box2 a:hover {
  color: inherit;
  background: #00CCFF;
 }


 .box3 {
  margin: 10px 0px;
  padding: 0 5px;
  color: inherit;
  background: #FFF2E0;
  background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd4.jpg);
  border: 1px solid black;
 }


 .box4 {
  margin: 10px 0px;
  padding: 2px 5px;
  color: inherit;
  background: #FFF2E0;
  background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd4.jpg);
  border: 1px solid black;
 }


 .box_header1 {
  display: block;
  margin: 0px 0px;
  padding: 0 5px;
  font-weight: normal;
  text-decoration: none;
  text-align: center;
  color: white;
  background: #663399;
  }


 .module_title_box {
  display: block;
  margin: 0px 0px;
  padding: 0 5px;
  font-weight: normal;
  text-decoration: none;
  text-align: center;
  color: white;
  background: #663399;
  }



 .downloads {
  margin: 10px 0px;
  padding: 0 5px 5px;
  color: inherit;
  background: #FFF2E0;
  background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd4.jpg);
  border: 1px solid black;
 }


 /* anchor links in download pages */
 .downloads a {
  display: inline;
  margin: 5px 2px;
  padding: 0 5px;
  font-weight: normal;
  text-decoration: none;
 }


 .downloads a:hover {
  color: inherit;
  background: #00CCFF;
 }


 .logo1 {
  display: block;
  height: 50px;
  width: 102%;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: -2px;
  color: inherit;
  background: #D5D6D5;
  border: 1px solid black;
 }


 .logo2 {
  display: block;
  height: 50px;
  width: 102%;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: -2px;
  color: inherit;
  background: #FFF2E0;
  border: 1px solid white;
 }


 .logo3 {
  display: block;
  height: 31px;
  width: 88px;
  margin-top: 10px;
  margin-bottom: 10px;
  margin-left: auto;
  margin-right: auto;
  color: inherit;
  background-color: inherit;
  border: 0;
 }


 .newsletter_subscribe {
  height: 85px;
  width: 75%;
  margin-top: 50px;
  margin-bottom: 0;
  margin-left: auto;
  margin-right: auto;
  padding-bottom: 0;
  text-align: center;
  color: inherit;
  background: aqua;
  border: solid 1px blue;
 }


 .newsletter_subscribe  h3 {
  margin: 3px 0px;
 }


 .admin_logon {
  height: 105px;
  width: 75%;
  margin-top: 25px;
  margin-bottom: 0;
  margin-left: auto;
  margin-right: auto;
  padding-bottom: 0;
  text-align: center;
  color: inherit;
  background: aqua;
  border: solid 1px blue;
 }


 .admin_logon  h3 {
  margin: 3px 0px;
 }


 .odd {
  display: block;
  margin-bottom: 1px;
  color: white;
  background: gray;
 }

 .even {
  display: block;
  margin-top: 1px;
  margin-bottom: 5px;
  color: inherit;
  background: yellow;
 }


 .text_message {
  margin-top: 75px;
  text-align: center;
  color: black;
  background-color: inherit;
 }


 #message_box {
  width: 95%;
  height: 300px;
  margin-top: 5px;
  margin-bottom: 5px;
 }


 #footer {
  margin: 5px 1%;
  padding: 1px 0;
  font-family: fantasy;
  font-size: xx-small;
  text-align: center;
  color: black;
  background: #ACDAE6;
  border: 1px solid white;
 }

 #footer a {
  text-decoration: none;
  color: blue;
  background-color: inherit;
 }

 #footer a:hover {
  color: white;
  background: #00CCFF;
 }


 #copyright {
  margin-top: <?php echo $copyright_MARGIN_TOP; ?>;
  margin-bottom: 5px;
  margin-left: 5px;
  margin-right: 4px;
  padding: 1px 0;
  font-family: sans;
  font-size: 10px;
  text-align: center;
  color: blue;
  background: #CFCCCF;
  border: 1px solid white;
 }


 div.update {
  font-size: small;
  text-align: center;
  margin-bottom: 25px;
 }


 #debug {
  width: 98%;
  margin-top: 5px;
  margin-bottom: 5px;
  margin-left: 5px;
  margin-right: 5px;
  padding: 1px 0;
  font-family: fantasy;
  font-size: small;
  /* text-align: center; */
  color: blue;
  background: #CFCCCF;
  border: 1px solid white;
 }


 hr {
  width: 95%;
  margin-left: auto;
  margin-right: auto;
 }


 .box3hr {
  width: 100%;
  margin-left: auto;
  margin-right: auto;
 }


 p.center {
  text-align: center;
 }


 p {
  margin-top: 0px;
  margin-bottom: 10px;
/* line-height: 100%; */
 }


 p.p1 {
  margin-top: 0px;
  margin-bottom: 10px;
 }


 p.p2 {
  margin-top: 0px;
  margin-bottom: 10px;
 }


 h1 {
  text-align: center;
  }


 h2 {
  text-align: center;
  }


 h3 {
  margin: 2px 2px;
  padding: 0 5px;
  text-align: center;
  }


 h4 {
  text-align: center;
  }


 h5 {
  text-align: center;
  }


 h6 {
  text-align: center;
  }


/* classes for more heading styles */
.hdr7 {
  color: blue;
  background-color: inherit;
 }


.box {
  display: block;
  margin-bottom: 0.5em;
  border: 1px solid blue;
}


.boxheader {
  font-weight: bold;
  color: green;
  background-color: inherit;
}


pre {
  margin-left: 2em;
  margin-right: 2em;
}


.array {
  font-weight: bold;
  color: blue;
  background-color: inherit;
}


form {
 margin: 10px 0px;
 padding: 0 5px; 
 color: inherit;
 background-color: #EEEAEE;
 border: solid blue 1px;
}


.control_box {
 margin-left: 10px;
 margin-right: 10px;
 margin-bottom: 10px;
 padding-top: 5px;
 padding-left: 10%;
 padding-bottom: 10px;
 color: inherit;
 background-color: gray;
 border: solid aqua 2px;
}


.center {
margin: -10px;
text-align: center;
}


.subheading {
 display: block;
 font-weight: bold;
/* margin-bottom: 0px; */
/* border: solid aqua 1px; */
 }


.subheading2 {
 display: inline;
 font-weight: bold;
/* margin-bottom: 0px; */
/* border: solid aqua 1px; */
 }


.book_summary {
 display: inline;
 font-weight: bold;
/* margin-bottom: 0px; */
/* border: solid aqua 1px; */
 }


.disclaimer {
 font-size: large;
 font-weight: bold;
 }


/* new additions for pop-down menus */

 #popdown_header1 {
  display: block;
  position: absolute;
  top: 110px;
  left: 5px;
  width: 12%;
  padding-left: 0;
  font-family: fantasy;
  font-size: xx-small;
  text-align: center;
  color: black;
  background: #ACDAE6;
  border: 1px solid white;
 }


 #popdown_header2 {
  display: block;
  position: absolute;
  top: 110px;
  right: 5px;
  width: 12%;
  padding-left: 0;
  font-family: fantasy;
  font-size: xx-small;
  text-align: center;
  color: black;
  background: #ACDAE6;
  border: 1px solid white;
 }


 #column_popdown_menu {
  /* display: block; item is visible */
  /* display: none;  item is NOT visible */
  display: none;
  position: absolute;
  top: 110px;
  left: 5px;
  width: 25%;
  color: inherit;
  background: #BDBEBD;
  /* background-image: url(<?php echo $SHARED_IMAGES; ?>/bkgnd5.jpg); */
  border: 1px solid white;
 }


 /* dead-end links that are place markers
  for some content to be added later */
 .dead_end_link {
  color: inherit;
  background-color: red;
 }


 /* active link with unfinished content */
 .unfinished_content {
  color: inherit;
  background-color: #E6E6FA;
 }


 /* link to an external website in new browser window */
 .external_link {
  color: inherit;
  background-color: #8BBABA;
 }




 /* shows or hides more page content */
 .more_page_content {
  text-decoration: underline;
  color: green;
  background-color: inherit;
 }


 /* shows or hides more page content */
 .more_page_content:hover {
  color: red;
  background-color: inherit;
 }


 /* shows or hides more page content */
 #more_php {
  display: none;
 }


ol
{
list-style-position: inside;
}


ul
{
list-style-position: inside;
}


li
{
margin-bottom: 10px;
background-color: white;
padding-left: 20px;
padding-bottom: 2px;
}

.text_style1 {
 font-weight: bold;
}


.tmda {
 margin: 5px 4px 5px 5px;
 border: 1px solid white;
}


.tmda-diagrams {
 margin: 5px;
}


.creative_commons_license {
 margin-top: 15px;
}

