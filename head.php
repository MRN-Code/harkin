<?php
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>HARKiN: Heaps of Data</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Dylan Wood" />
		<link rel="shortcut icon" href="images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/menu.css" />
		<link rel="stylesheet" type="text/css" href="css/search.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								<li>
									<a class="gn-icon gn-icon-download">COINSTAC Nodes</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-illustrator">Cerebro</a></li>
										<li><a class="gn-icon gn-icon-earth">All Nodes</a></li>
									</ul>
								</li>
								<li>
									<a class="gn-icon gn-icon-article">Publications</a>
									<ul class="gn-submenu">
										<li><a class="gn-icon gn-icon-article">Articles</a></li>
										<li><a class="gn-icon gn-icon-pictures">Images</a></li>
										<li><a class="gn-icon gn-icon-videos">Videos</a></li>
									</ul>
								</li>
								<li><a class="gn-icon gn-icon-cog">Settings</a></li>
								<li><a class="gn-icon gn-icon-help">Help</a></li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
            <!--
            <li class="gn-search-item">
               <input placeholder="Search" type="search" class="gn-search">
               <a class="gn-icon gn-icon-search"><span>Search</span></a>
            </li>
            -->
				<li><a><span>HARK<font style="color:red">i</font>N</span></a></li>
            <li class="search_bar">
               <form id="ui_element" class="sb_wrapper">
                  <div>
                     <span class="sb_down">All</span>
                     <div class="sb_input_wrapper">
                        <span class="exclude-keyword">
                           <div class="keyword-icon include-keyword exclude-keyword">!</div>
                           Test
                           <div class="keyword-icon remove-keyword">X</div>
                        </span>
                        <div class="keyword-join-icon or">or</div>
                        <span>
                           <div class="keyword-icon include-keyword">&#10004</div>
                           Test
                           <div class="keyword-icon remove-keyword">X</div>
                        </span>
                        <div class="keyword-join-icon and">&</div>
                        <span>
                           <div class="keyword-icon include-keyword">&#10004</div>
                           Test
                           <div class="keyword-icon remove-keyword">X</div>
                        </span>
                        <input class="sb_input" type="text" placeholder="Enter key words"/>
                     </div>
                     <input class="sb_search" type="submit" value=""/>
                  </div>
                  <ul class="sb_dropdown" style="display:none;">
                     <li class="sb_filter">Filter your search</li>
                     <li>
                        <input type="checkbox" checked id="search_all"/>
                        <label for="search_all">
                           <strong>All Categories</strong>
                        </label>
                     </li>
                     <li>
                        <input id="search_cat_1" checked disabled type="checkbox"/>
                        <label for="search_cat_1">Consortia</label>
                     </li>
                     <li>
                        <input id="search_cat_2" checked disabled type="checkbox"/>
                        <label for="search_cat_2">Studies</label>
                     </li>
                     <li>
                        <input id="search_cat_3" checked disabled type="checkbox"/>
                        <label for="search_cat_3">Sites</label>
                     </li>
                     <li>
                        <input id="search_cat_4" checked disabled type="checkbox"/>
                        <label for="search_cat_4">People</label>
                     </li>
                     <li>
                        <input id="search_cat_5" checked disabled type="checkbox"/>
                        <label for="search_cat_5">COINSTAC Nodes</label>
                     </li>
                     <li>
                        <input id="search_cat_6" checked disabled type="checkbox"/>
                        <label for="search_cat_6">Data Dictionary</label>
                     </li>
                  </ul>
               </form>
            </li>
				<li class="profile_bar"><a><span>Dr. X</span><img src="images/profile.png"></img></a></li>
			</ul>

