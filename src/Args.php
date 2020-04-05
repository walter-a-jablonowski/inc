<?php

namespace WAJ\Lib\UI;


/*@

  Part of Safe implementation

  TASK: Maybe use Args extends Safe

*/
class Args /*@*/
{

  protected $args;
  protected $throwExIfMissing;


  public function __construct($args = null, $throwExIfMissing = false)
  {
    $this->args = $args;
    $this->throwExIfMissing = $throwExIfMissing;
  }


  public function getData()
  {
    return $this->args;
  }


  public function has( $name )
  {
    return isset( $this->args[$name] );
  }


  public function __get($name)
  {
    if( $this->args && in_array( $name, array_keys( $this->args )))
      return $this->args[$name];
    
    if( $this->throwExIfMissing)
      throw new \Exception( "Property $name unknown");

    return null;
  }


  public function __set($name, $v)
  {
    $this->args[$name] = $v;
  }


  // ArrayAccess

  public function offsetSet($offset, $value)
  {  
    if (is_null($offset))
      $this->args[] = $value;
    else
      $this->args[$offset] = $value;
  }

  public function offsetExists($offset)
  {
    return isset($this->args[$offset]);
  }

  public function offsetUnset($offset)
  {
    unset( $this->args[$offset] );
  }

  public function offsetGet($offset)
  {
    return isset( $this->args[$offset] )  ?  $this->args[$offset]  :  null;
  }

}

?>