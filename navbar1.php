<!doctype html>
<html>
<head>
	<title>Menu</title>
	<style>
	*{margin:0%;
	padding:0%;}
	h1{
		margin-top:10px;
   color: #FFFFFF;
   text-align:center;
   background-color: #FF4500;
   padding: 15px;
   text-decoration: bold;
}
	.note{
   color: #FF0000;
   text-align:center;
   font-size: 1.5em;
}
	#nav {
	position:fixed;
	width:20000px; 
	height:49px;
	padding-left:80px;
	padding-top:-100px;
	padding-bottom:0px;
	background-color: #00FF00;
		background-size: 180px 160px;
		
}

ul#navigation {
	margin:0px auto;
	position:relative;
	float:left;
	
}

ul#navigation li {
	display:inline;
	font-size:15px;
	font-weight:bold;
	margin:0;
	padding:0;
	float:left;
	position:relative;
	
}

ul#navigation li a {
	padding-left:85px;
	padding-right:15px;
	padding-top:15px;
	padding-bottom:15px;
	color:#FFFFFF;
	text-shadow:1px 1px 0px #fff;
	text-decoration:none;
	display:block;
	background: #00FF00;
	
	-webkit-transition:color 0.2s linear, background 0.2s linear;	
	-moz-transition:color 0.2s linear, background 0.2s linear;	
	-o-transition:color 0.2s linear, background 0.2s linear;	
	transition:color 0.2s linear, background 0.2s linear;	
}

ul#navigation li a:hover {
	background-color:#CCFFCC;
	color:#282828;
	
}

ul#navigation li a.first {
	border-left: 0 none;
}

ul#navigation li a.last {
	border-right: 0 none;
}

ul#navigation li:hover > a {
	background:#FF4500;
}



/* Drop-Down Navigation */
ul#navigation li:hover > ul
{
/*these 2 styles are very important, 
being the ones which make the drop-down to appear on hover */
	visibility:visible;
	opacity:1;
}

ul#navigation ul, ul#navigation ul li ul {
	list-style: none;
    margin: 0;
    padding: 0;    
/*the next 2 styles are very important, 
being the ones which make the drop-down to stay hidden */
    visibility:hidden;
    opacity:0;
    position: absolute;
    z-index: 99999;
	width:180px;
	background:#66FF33;
	box-shadow:1px 1px 3px #ccc;
/* css3 transitions for smooth hover effect */
	-webkit-transition:opacity 0.2s linear, visibility 0.2s linear; 
	-moz-transition:opacity 0.2s linear, visibility 0.2s linear; 
	-o-transition:opacity 0.2s linear, visibility 0.2s linear; 
	transition:opacity 0.2s linear, visibility 0.2s linear; 	
}

ul#navigation ul {
    top: 43px;
    left: 0px;
	
}

ul#navigation ul li ul {
    top: 0;
    left: 181px; /* strong related to width:180px; from above */
	
}

ul#navigation ul li {
	clear:both;
	width:100%;
	border:0 none;
	border-bottom:1px solid #c9c9c9;
}

ul#navigation ul li a {
	background:none;
	padding:7px 15px;
	color:#616161;
	text-shadow:1px 1px 0px #fff;
	text-decoration:none;
	display:inline-block;
	border:0 none;
	float:left;
	clear:both;
	width:150px;
}

	</style>
	
</head>
<p>
<nav id="nav">
	<ul id="navigation">
	    <li><a href="index.php">HOME</a></li>
		<li><a href="#">VIEW BY &raquo;</a>
			<ul>
				<li><a href="#">VIEW OVERALL &raquo;</a><ul>
				<li><a href="overall.php">VIEW ALL</a></li>						
				<li><a href="disqualified.php">VIEW ALL DISQUALIFIED STUDENTS</a></li>						
				<li><a href="qualified.php">VIEW ALL QUALIFIED STUDENTS</a></li>	</ul>
				</li>
				<li><a href="view_itws.php">VIEW BY ITWS</a></li>
				<li><a href="view_ds.php">VIEW BY DS</a></li>					
				<li><a href="view_maths.php">VIEW BY MATHS</a></li>					
				<li><a href="view_ec.php">VIEW BY EC</a></li>					
				<li><a href="view_prog.php">VIEW BY programming</a></li>												
									
			</ul>
		</li>
		<li><a href="login.php">LOGIN FOR CORRECTIONS</a></li>
	</ul>
</nav>
</p>
<br><br>
<h1>Welcome To Attendance consolidation system</h1><br><br>
<marquee behavior="scroll" direction="left" scrollamount="10"><h4><span class="note">
Only admin Can be logged in to make corrections    </span></h4></marquee><br><br>
</html>
