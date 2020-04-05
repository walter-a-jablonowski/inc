<?php

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;


/*@
  
*/
function inc( $view, $args = [])  /*@*/
{
  extract($args);
  require($view);
  print "\n";
}


/*@

*/
function incn( $view, $args = [])  /*@*/
{
  extract($args);
  require($view);
}


/*@
  
*/
function inc1($view, ...$args)  /*@*/
{
  inc( $view, $args);
}


/*@

*/
function incy( $view, $args_file )  /*@*/
{
  $args = Yaml::parse( $args_file );

  inc( $view, $args);
}


/*@
  
*/
function sinc( $view, $args = [])  /*@*/
{
  extract($args);

  ob_start();                   // Alternative: $s = require()
  require($view);
  $INC_STR_R = ob_get_clean();  // var has unusual name

  return $INC_STR_R;
}

?>