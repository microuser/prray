<?php

/*
* prray class has array data conversion and collections capabilities. An array is an ordered map which associates values to keys. It can be used as a vector, linked list, trees and multidemensional arrayes.
* The key must consist of an inter or a string. A (float)1.5 will be truncated to integer 1.

* @author microuser
* @copyright MIT-2
* @version 0.01a
*
* <pre>
* Useage:
* $p = new Prray
* $p->add(array(1,2,3)
* $p->add(array(0=>'a'
*                ,1=>'b'
*                ,2=>'c'
*                );
* $p->add(array(0=>'a',1=>array('1.1));

* </pre>
* TODO: Impliment Conversion Between All data types
* TODO: Impliment Singleton
* TODO: Impliment Sort
* TODO: Impliment Benchmark of Sorts and Conversion
*/
class Prray {

/*
*the array holder
*/
private $collection;
private $mode;

public function __construct($arrayMode='KeyValue'){
$this->collection = array();
$this->mode=$arrayMode;
}//end function __construct


/*
*prepends passed elements to the front of the array. Note that the list of elements is prepended as a whole, so that the prepended elements stay in the same order. All numerical array keys will be modified to start counting from zero while literal keys won't be touched.
*/
public function prepend($arrayOrValue){
  return array_unshift($this->collection,$arrayOrValue);
}

public function append($arrayOrValue){
  foreach ($array as $row){
    $this->collection[] = $row;
  }
}



/*
* add, performs a distructive add, overwriting any previously indexed values.
*
**/
public function add($array){
  if($mode=='keyvalue'){
    foreach($array as $key => $row){
      $this->collection[$key] = $row;
    }
  }


}//end function add
  
}



}//end class Prray

?>
