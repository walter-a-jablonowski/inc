<?php

namespace WAJ\Lib\UI;


/*@

  Part of Safe implementation

*/
class Args /*@*/
{

  protected $args;
  protected $throwIfMissing;


  public function __construct($args = null, $throwIfMissing = false)
  {
    $this->args = $args;
    $this->throwIfMissing = $throwIfMissing;
  }


  public function has( $name )
  {
    return isset( $this->args[$name] );
  }


  public function __get($name)
  {
    if( $this->args && in_array( $name, array_keys( $this->args )))
      return $this->args[$name];
    
    if( $this->throwIfMissing)
      throw new \Exception("Property $name unknown");

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