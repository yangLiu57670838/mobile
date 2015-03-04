<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- meta tag specifies how the browser should control the page zoom level and dimensions.  -->
<link rel="stylesheet" href="jquery.mobile-1.4.5.css">
<link rel="stylesheet" href="style.css" type="text/css" />
<script src="jquery-1.11.1.js"></script>
<script src="jquery.mobile-1.4.5.js"></script>
</head> 
<body>


<div data-role="page" id="main"><!--data-role="page" is the page displayed in the browser-->

<div data-role="panel" id="searchPanel"  data-position="right"> <!--data position will determine which way the panel will slide to-->
    <h2>For more details of products, please search it through the full version of my website.</h2>
    <p></p>
	<a href="#main" data-rel="close" class="ui-btn ui-btn-inline">Close</a><!--data rel close and href to main page can close the panel-->
  </div> 
<!-- data-role="panel"  creates a panel which can slide in the screen, panel content must be put before header or after footer-->


  <div data-role="header" data-position="fixed"><!--data-role="header" creates a toolbar at the top of the page (often used for title or search buttons)-->
      
		<a href="http://www.nanjinglove.com/differentgifts/index.php?mobile=false" rel="external" class="ui-btn ui-corner-all ui-shadow ui-icon-home ui-btn-icon-left ui-alt-icon" >Full Version Website</a>
	<!--rel="external" is important for linking to an external website, it will not use the jquery mobile's animate effects and it will make sure the appearance will not change-->
	<!--ui-alt-icon makes the icon become black-->
    <p> <br> </p>
    <a href="#searchPanel" class="ui-btn ui-corner-all ui-shadow ui-icon-search ui-btn-icon-left">Search</a>
	
  </div>

  <div data-role="main" class="ui-content"><!--data-role="main" defines the content of the page, like text, images, buttons, forms, etc.-->
  <!--"ui-content" class adds extra padding and margin inside the page content-->
    <p></p>
	

	

	  <div data-role="collapsible"><!--data-role="collapsible" allows you to hide and show contents-->
  
  <h1>Show details - Categories</h1>
    <div data-role="collapsibleset"><!--collapsible contents can be nested, collapibleset are collapsible blocks that are grouped together-->
  	<?php

require "../includes/defs.php";

$categories = getCategories();

foreach ($categories as $c) {
  echo "<div data-role=\"collapsible\"><h1>{$c[1]}</h1><p>For more details, please visit the full version of my website</p></div>";
}//backslash \ is used for escaping " " in echo
?>
</div>

</div>
	

	<div data-role="collapsible"><!--data-role="collapsible" allows you to hide and show contents-->
  
  <h1>Show details - Products</h1>
    <div data-role="collapsibleset">
  	<?php

require "../includes/defs.php";

$products = allproducts();

foreach ($products as $p) {
  echo "<div data-role=\"collapsible\"><h1>{$p[1]}</h1><p>Category: {$p[2]}, {$p[3]}, Price: {$p[4]}, {$p[6]}, Comments: {$p[7]}. For more details, please visit the full version of this website.</p></div>";
}
?>
</div>

</div>


  <div data-role="collapsible"><!--data-role="collapsible" allows you to hide and show contents-->
  
  <h1>Show details - Customers</h1>
    <div data-role="collapsibleset">
  	<?php

require "../includes/defs.php";

$users = getusers();

foreach ($users as $u) {
  echo "<div data-role=\"collapsible\"><h1>{$u[1]}</h1><p>Phone number: {$u[2]}, Postcode: {$u[3]}, Contact: {$u[4]}. For more details, please visit the full version of this website.</p></div>";
}
?>
</div>

</div>



	
	<div data-role=“controlgroup" data-type="vertical">
	<!--data-role="controlgroup" data-type="horizontal" group all buttons in div vertically or horizontally-->
	
	<!--create button with <a> element with class="ui-btn"-->
	<a href="#contact" class="ui-btn ui-corner-all ui-shadow ui-icon-comment ui-btn-icon-left" data-transition="pop">Contact me</a>
	<!--data-transition defines how to transition from one page to the next. including fade, flip, slide, popup...-->

  </div>
  

  
  
  
  
  </div>
  
  <div data-role="footer" data-position="fixed"><!-- data-role="footer" creates a toolbar at the bottom of the page-->
    <!-- data-position="fixed", Headers and footers will remain positioned at the top and bottom of the page-->
	<p>For more functions, please visit the full version of this website</p>

  </div>
</div> 




<div data-role="page"  data-dialog="true" id="contact">
<!--In jQuery Mobile, you can create multiple pages in a single HTML file.
Separate each page with a unique id and use the href attribute to link between them-->
<!--data-dialog=true means this page will be displayed as a dialog-->
  <div data-role="header">
    <h1>Welcome</h1>
  </div>

  <div data-role="main" class="ui-content">
    
	
	<h1>Yang Liu</h1>
	<p>0425306362</p>

	
    <a href="#" class="ui-btn ui-corner-all ui-shadow ui-icon-back ui-btn-icon-left" data-rel="back">Back</a>
	<!-- data-rel="back" attribute means go back button-->
	<!--ui-corner-all add Adds rounded corners to the button, ui-shadow Adds shadows to the button-->
	<!-- more than one button css class, separate each class with a space-->
	<!--ui-icon class adds an icon to your button, and position the icon with ui-btn-icon-pos-->
  </div>

  <div data-role="footer">
    <h1></h1>
  </div>
</div> 


</body>
</html>