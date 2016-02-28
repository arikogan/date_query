<?php
/*
Plugin Name: date_query enabler
Plugin URI: http://www.fxempire.com
Description: A plugin to add date_query to the list of allowed filters for the REST API
Version: 0.1
Author: Ariel Kogan
Author URI: http://www.fxempire.com
License: GPL2
*/

function my_rest_query_vars($valid_vars)
{
    $valid_vars = array_merge($valid_vars, array('date_query'));
    return $valid_vars;
}

add_filter('rest_query_vars', 'my_rest_query_vars');

?>