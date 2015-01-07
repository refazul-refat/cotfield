<?php
/**
 * @package Cotfield Filters
 * @version 0.1
 */
/*
Plugin Name: Cotfield Filters
Author: AllSpark
*/
function remove_all_br($content) {
    return preg_replace('/\<br.*?\>/','',$content);
}
add_filter( 'the_content', 'remove_all_br');
