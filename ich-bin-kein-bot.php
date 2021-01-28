<?php
/**
 * Plugin Name: Ich bin kein Bot
 * @package IchBinKeinBot
 * @version: 0.0.1
 * @description: I'm not sure if I'm a bot
 */

$ichbin = 'wer';

add_shortcode(
    $ichbin,
    'wer_func'
);

function wer_func() {
    $werReturn = '<p>';
    $werReturn .= 'Ich bin kein Bot';
    $werReturn .= '</p>';
    
    return $werReturn;
}