<?php

// Please edit the below database settings
// Please note you must select the table in index.php
$db_server      = 'localhost';
$db_username    = 'root';
$db_password    = '615218009';
$db_name        = 'Se1byDB';

/*  That is all, if this connects then all is well
    You will not need to edit the below but I have
    left it there in case quick fixes need to be made

    ***********************************************
*/


// Connects to the mysql server
mysql_connect($db_server, $db_username, $db_password) or die("Could not connect: " . mysql_error());
// Connects to the mysql database
mysql_select_db($db_name);

// Nice shortened variable
$link = mysql_connect($db_server, $db_username, $db_password) or die("Could not connect: " . mysql_error());





// Debug stuff incase I need to change common stuff
function theSexyLoadingSystem($id,$page,$total_items,$items_per_page,$info1=true){

    include_once('Lite.php');

    $cp=new LukesDBPager();

    // Data Gathering
    $params['selected_page']    = $page;
    $params['total_items']      = $total_items;
    $params['items_per_page']   = $items_per_page=='all' ? $total_items : $items_per_page;
    $params['url']              = 'javascript: ctPager(\''.$id.'\',\'#NUM_PAGE#\');';

    // Layout Configurations
    $params['id']               = $id.'_pager';
    $params['type']             = 'centered';
    $params['nav_pages']        = 5;
    $params['info1']            = $info1;

    $cp->pager($params);
    $out_pager=$cp->display();

    return $out_pager;
}

// Returns the select amount array that has been calculated from the database
function filled_array($arr){

    for($i=0; $i<count($arr); $i++){
        if($arr[$i]!='')
            return true;
    }

    return false;

}

?>