<?php

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;


/*@

*/
function incy( $view, $args_file )  /*@*/
{
  $args = Yaml::parse( $args_file );

  inc( $view, $args);
}

?>