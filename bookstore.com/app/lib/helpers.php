<?php
use App\lib\Facades\Tool;
if (!function_exists('get_thumbnail')) {
  function get_thumbnail($fileName,$suffix='_thumb'){
    return Tool::getThumbnail($fileName,$suffix);
  }
}
if (!function_exists('get_currentcy_vn')) {
  function get_currency_vn($number, $symbol='VND', $isPrefix = false)
  {
    return Tool::getCurrencyVN($number, $symbol, $isPrefix);
  }
}
?>
