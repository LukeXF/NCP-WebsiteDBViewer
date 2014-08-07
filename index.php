<?php

	/**
	*
	* @author Luke Brown
	* @link Any issues please contact me@luke.sx
	* @since 07th August 2014
	*
	**/

	include_once('assets/configurations.php');
	include_once('assets/Main.php');


	// Selects the table from the database
	$params['sql_query']                = "SELECT * FROM Hackasaurus";

	// Tells the table what to call the headers
	$params['header']                   = 'Face, Username,Rank,Infraction,Server,Level,Bans,Kicks,Time';

	// Defines the width of each column, but this is mainly done in css.
	$params['width']                    = '10  , 90      ,10  ,90  ,90   ,50    ,50   ,10%  ,20  , 50%  ';

	// 	Players shown per page. It will not show more than is physically in the DB
	//	For example, if you have 48 players and you set below to 10,25,50 it would
	//	Display 10,25,48 and not anything above - it will show the limit.
	$params['items_per_page_init']      = '10,25,50';

	// I used the formatting of the column to allow the play heads to show up pretty easily.
	$params['format_cols']          = array('<img src="https://minotar.net/avatar/#COL1#/20">','#COL1#','','','','','','','');



	// Sends all the parameters to the newly created table.
	$ct->table($params);
	$ct->pager = theSexyLoadingSystem('ct',$page,$ct->total_items,$ct->items_per_page);

	// I used a post request to push the AJAX display
	if ($_POST['ajax_option']!='') {
		echo json_encode($ct->display($_POST['ajax_option'],true));
		exit;
	} else {
		$out=$ct->display();
	}









?>
<!-- 	
	This code and project was developed under contact by NivanaMC
	To Luke Brown (me<@>luke.sx). If you like what you see, rather
	than trying to steal my code - contact me and we can work together.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
	<title>Nirvana Infractions</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">


	<?php // 	Loads in external resources 	?>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans+Condensed:700" rel="stylesheet">

	<?php // 	Favicon loading 	?>
	<link rel="shortcut icon" href="/assets/img/favicon.ico">

	<?php // 	You must load ajax first for the page to work 	?>
	<script type="text/javascript" src="js/lukebrown-ajax.min.js"></script>

	<?php // 	Loading the css filesize 	?>
	<link rel="stylesheet" href="css/style.css" type="text/css" >
	<link rel="stylesheet" href="css/style.css" type="css/nirvanamc.css" >
	<link rel="stylesheet" href="//craftilldawn.com/buycraft/stylesheet.css">


</head>



<body>

	<?php // 	Navbar Elements		?>
	<header class="page-head">
		<div class="page-head__bar">
			<div class="container">
				<div id="menu-button" class="menu-button">
					<span></span>
				</div>
				<nav id="main-nav" class="main-nav">
					<ul class="main-nav__list">
						<li class=""><a href="/">Home</a></li>
						<li class=""><a href="">Vote</a></li>
						<li class=""><a href="">Shop</a></li>
						<li class=""><a href="">Forum</a></li>
						<li class="current"><a href="">Violations</a></li>
					</ul>
				</nav>

			</div>
		</div>
		<img class="logo" alt="" src="http://i.imgur.com/PbWCoC9.png">
	</header>

	<br>

	<?php // 	Begin Main Body		?>
	<div class="container">
		<div class="grid">

			<div class="grid__item desk--three-thirds">
				<main class="page-main">
					<article class="module">
						<h1 class="module__heading h2">Nirvana Infractions</h1>

						<div class="grid__item desk--one-third sexysearch">

							<div class="dropdown button-group__small sexysearch">
								<a href="javascript: ctShowAdvancedSearch('ct');" title="Advanced Search" class="button button--small sexypadding">
									<i class="fa fa-search"></i> Advanced Search 
								</a>
							</div>

							<div id="button" class="dropdown button-group__small sexysearch">
								<a href="javascript: sql'SELECT * FROM  `Hackasaurus` WHERE DATE( TIMESTAMP ) > DATE_SUB( NOW( ) , INTERVAL 5 MINUTE' " title="The Last 5 Minutes" class="button button--small sexypadding">
									<i class="fa fa-clock-o"></i> Recent Infractions 
								</a>
							</div>

							<script type="text/javascript">
								var button = document.getElementById("button");
									button.addEventListener("click" ajaxFunction, false);
								var ajaxFunction = function () {
									    javascript: ctShowAdvancedSearch('ct');
								}
							</script>

						</div>

						<?php echo $out;?>

					</article>
				</main>
			</div>

			<?php 
				// Remove the comment to turn on all my sexy staffs :D
				// include 'stats.php'; 
			?>


		</div><!-- grid -->
	</div><!-- container -->


	<?php // 	Footer		?>
	<footer class="page-footer group h6">
		<div class="container">
			<div class="grid grid--middle">
				<div class="grid__item desk--one-third">
				</div>
				<div class="grid__item desk--one-third">
					Copyright NirvanaMC, 2014
				</div>
				<div class="grid__item desk--one-third sneakyhiddenstuff">
					Violations System by <a href="http://luke.sx">Luke Brown</a>
				</div>
			</div>
		</div>
	</footer>

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>$(document).ready(function() {$('.popup--ajax').magnificPopup({type:'ajax'});});</script>

		
</body>
</html>