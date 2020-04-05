<?php

/*@
  
*/
function inc( $view, $args = [])  /*@*/
{
  if( ! is_object($args) )
    extract($args);
  require($view);
  print "\n";
}


/*@

*/
function incn( $view, $args = [])  /*@*/
{
  if( ! is_object($args) )
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
function sinc( $view, $args = [])  /*@*/
{
  if( ! is_object($args) )
    extract($args);

  ob_start();                   // Alternative: $s = require()
  require($view);
  $INC_STR_R = ob_get_clean();  // var has unusual name

  return $INC_STR_R;
}

?>