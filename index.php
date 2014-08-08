<?php

	/**
	*
	* @author Luke Brown
	* @link Any issues please contact me@luke.sx
	* @since 07th August 2014
	*
	**/

	include_once('assets/configurations.php'); // Settings for this project (edit this)
	include_once('assets/Main.php'); //	The compress backbone for this project
	include('assets/color.php'); // The background color selection for the importance level
	include('assets/time.php'); // The time frame selector to search by minutes
	include('assets/send.php'); // Makes the magic happen!

?>

<!-- 	
	This code and project was developed under contact by NivanaMC
	To Luke Brown (me@luke.sx). If you like what you see, rather
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
						<?php echo $timeHeader; ?>
						<div class="grid__item desk--one-third sexysearch">




							<?php // 	The search button with javascript to function it below	?>
							<div class="dropdown button-group__small sexysearch">
								<a href="javascript: ctShowAdvancedSearch('ct');" title="Advanced Search" class="button button--small sexypadding">
									<i class="fa fa-search"></i> Advanced Search 
								</a>
							</div>

							<script type="text/javascript">
								var button = document.getElementById("button");
									button.addEventListener("click" ajaxFunction, false);
								var ajaxFunction = function () {
										javascript: ctShowAdvancedSearch('ct');
								}
							</script>




							<select id="dropdowntime" onchange="gotoPage(this)" value="Select Recent" class="sexytime">
								<?php // The timing options you specified above will be placed here ?>
							</select>

							<script>
							// This is for th drop down menu, specif the options above.
							timeSetting = [<?php echo $timeSetting; ?>];
							text = "";
							var i;
							for (i = 0; i < timeSetting.length; i++) {
							     text  += "<option value='?q=" + timeSetting[i] + "'>" + timeSetting[i] + " Minutes </option>";
							}

							// Print the results
							document.getElementById("dropdowntime").innerHTML = text;
							</script>


							<script type="text/javascript">
								function gotoPage(select){
									window.location = select.value;
								}
							</script>
							

					

						</div>

						<?php echo $out;?>

					</article>
				</main>
			</div>

			<?php 
				// Remove the comment to turn on all my sexy stats :D
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

		
</body>
</html>