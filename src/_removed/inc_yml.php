<?php

use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;


/*@

*/
function inc_yml( $view, $args_file )  /*@*/
{
  $args = Yaml::parse( $args_file );

  inc( $view, $args);
}

?>