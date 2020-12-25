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
function inc_args($view, ...$args)  /*@*/
{
  inc( $view, $args);
}


/*@
  
*/
function inc_s( $view, $args = [])  /*@*/
{
  if( ! is_object($args) )
    extract($args);

  ob_start();                   // Alternative: $s = require()
  require($view);
  $INC_STR_R = ob_get_clean();  // var has unusual name

  return $INC_STR_R;
}

?>