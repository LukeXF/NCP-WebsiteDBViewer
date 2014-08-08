<?php
	/*switch ($i) {
		case "0":
			$theColor = "rgb(234, 238, 144)";
			break;
		case "1":
			$theColor = "rgb(238, 223, 144)";
			break;
		case "2":
			$theColor = "rgb(238, 208, 144)";
			break;
		case "3":
			$theColor = "rgb(238, 193, 144)";
			break;
		case "4":
			$theColor = "rgb(238, 163, 144)";
			break;
		case "5":
			$theColor = "rgb(234, 238, 144)";
			break;
		case "6":
			$theColor = "rgb(234, 238, 144)";
			break;
		case "7":
			$theColor = "rgb(234, 238, 144)";
			break;
		case "8":
			$theColor = "rgb(234, 238, 144)";
			break;
		case "9":
			$theColor = "rgb(234, 238, 144)";
			break;
		case "10":
			$theColor = "rgb(234, 238, 144)";
			break;
	}*/

	$i = "#COL9#";

	if ($i == '5') {
	    $theColor = "rgb(234, 238, 144)";
	} elseif ($i == "5") {
	    $theColor = "rgb(238, 223, 144)";
	} else {
	    $theColor = "rgb(238, 208, 144)";
	}

	
	// I used the formatting of the column to allow the play heads to show up pretty easily.
	$params['format_cols']          = array('
		<img src="https://minotar.net/avatar/#COL1#/20">',
		'#COL1#',
		'',
		'',
		'',
		'',
		'',
		"<div style='background-color:$theColor; padding: 11px;margin: -10px;}'>#COL9# = $i</div>",'');

echo $theColor;


	// Sends all the parameters to the newly created table.
	$ct->table($params);
	$ct->pager = theSexyLoadingSystem('ct',$page,$ct->total_items,$ct->items_per_page);
	//$ct->set_cell_attribute('style="background-color: rgb(234, 238, 144);"',2,'');
	//$ct->set_cell_attribute('style="background-color: rgb(238, 223, 144);"',3,'');
	//$ct->set_cell_attribute('style="background-color: rgb(238, 208, 144);"',4,'');
	//$ct->set_cell_attribute('style="background-color: rgb(238, 193, 144);"',5,'');
	///$ct->set_cell_attribute('style="background-color: rgb(238, 182, 144);"',6,'');
	$ct->set_cell_attribute('style="background-color: rgb(238, 163, 144);"',7,'');
	$ct->set_cell_attribute('style="background-color: rgb(238, 144, 144);"',8,'');
	$ct->set_cell_attribute('style="background-color: rgb(226, 114, 114);"',9,'');
	$ct->set_cell_attribute('style="background-color: rgb(211, 89, 89);             "',10,'');
	$ct->set_cell_attribute('style="background-color: rgb(195, 63, 63); color=#COL1#,"',11,'');

?>