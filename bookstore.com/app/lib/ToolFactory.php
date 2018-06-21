<?php
namespace App\lib;

/**
 * Class ToolFactory
 * @author yourname
 */
class ToolFactory
{
  /**
   * undocumented function
   *
   * @return void
   */
  public function getThumbnail($fileName, $suffix)
  {
    if ($fileName) {
      return preg_replace("/(.*)\.(.*)/i", "$1{$suffix}.$2", $fileName);
    }
    return '';
  }
  
  public function getCurrencyVN($number, $symbol = 'VND', $isPrefix = false)
  {
    if ($isPrefix) {
      return $symbol . number_format($number, 0, ',', '.');
    }
    return number_format($number, 0, ',', '.') . $symbol;
  }
}
?>
