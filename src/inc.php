<?php

/*@

args either

- single array
- multiple args
- or single object

*/
function inc( $view, ...$args)  /*@*/
{
  if( ! $view || count($args) == 0 )
    return;
  
  // Single array or obj
  
  if( ( is_array($args[0]) && count($args) == 1) ||
      is_object($args[0])
  )
    $args = $args[0];
  
  if( ! is_object($args) )
    extract($args);

  require($view);
  print "\n";
}


/*@
  
*/
function inc_s( $view, $args = [])  /*@*/
{
  if( ! $view || count($args) == 0 )
    return '';
  
  // Single array or obj
  
  if( ( is_array($args[0]) && count($args) == 1) ||
      is_object($args[0])
  )
    $args = $args[0];

  if( ! is_object($args) )
    extract($args);

  ob_start();                   // Alternative: $s = require()
  require($view);
  $INC_STR_R = ob_get_clean();  // var has unusual name

  return $INC_STR_R;
}

?>