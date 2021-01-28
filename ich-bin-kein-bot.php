<?php
/**
 * Plugin Name: Ich bin kein Bot
 * @package IchBinKeinBot
 * @version: 0.0.1
 * @description: I'm not sure if I'm a bot
 */

$ichbin = 'wer';
$bitcoin_price = 'btc';

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

add_shortcode(
  $bitcoin_price,
  'get_bitcoin_price'
);

function get_bitcoin_price() {
  $btc_price_response = wp_remote_get('https://api.coinbase.com/v2/prices/spot?currency=USD');
  $btc_price_body = json_decode(wp_remote_retrieve_body($btc_price_response), true);
  $current_price_usd = '$' . $btc_price_body['data']['amount'];

  return $current_price_usd;
}