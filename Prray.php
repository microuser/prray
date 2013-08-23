<?php

/*
* prray class has array data conversion and collections capabilities. An array is an ordered map which associates values to keys. It can be used as a vector, linked list, trees and multidemensional arrayes.
* The key must consist of an inter or a string. A (float)1.5 will be truncated to integer 1.
* A new structure is to be presented which I call a 'pivot structure'. The advantage is to be able to create a view of merged information contained on two seaparate table sets using a key.
* @author microuser
* @copyright 2013 microuser
* @version 0.01a
* @license MIT-2
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
private $privateKey;
private $privateTable;
private $forignKey;
private $foreignTable;

public function setPrivateKey($privateKey='ID'){
  $this->privateKey=$privateKey;
}
public function setForeignKey($privateKey='ID'){
  $this->foreignKey=$foreignKey;
}
public function setPrivateTable($table){
  $this->privateTable=$privateTable;
}
public function setForeignTable($table){
  $this->foreignTable
}


public function __construct($arrayMode='KeyValue'){
$this->collection = array();
$this->mode=$arrayMode;
}//end function __construct


/*
*prepends passed elements to the front of the array. Note that the list of elements is prepended as a whole, so that the prepended elements stay in the same order. All numerical array keys will be modified to start counting from zero while literal keys won't be touched.
*/
public function prepend($arrayOrValue){
  if($mode=='keyvalue'){
  return array_unshift($this->collection,$arrayOrValue);
  }elseif($mode==''){
    //??
  }
  
}

public function append($arrayOrValue){
  if($mode=='keyvalue'){
    foreach ($array as $row){
      $this->collection[] = $row;
    }
  }elseif($mode==''){
    //??
  }
}



/*
* add, performs a distructive add, overwriting any previously indexed values.
*
**/
public function add($array){
  
  if($mode=='keyvalue') {
    foreach($array as $key => $row){
      $this->collection[$key] = $row;
    }
  }
  elseif($mode=='value') {
    $this->append($array);    
  }
  elseif($mode=='dataset'){
    //??// valuekeys ??? aka key value pair
  }elseif($mode=='associative'){
    //??//
  }elseif($mode=='flat'){
    
  }
  
}

}//end function add

public function convert($fromMode,$toMode,array $fromArray){
  $toArray = array();
  if($fromMode=='keyvalue'&&$toMode=='value'){
    
  }elseif($fromMode==''&&$toMode==''){
    
  }elseif($fromMode==''&&$toMode==''){
    
  }elseif($fromMode==''&&$toMode==''){
    
  }

  return $toArray;
}

/*
* truncates the key while converting from key value array to key array.
*/
public function convertKeyValue2Value($keyValueArray){
  $valueArray = array();
  foreach($keyValueArray as $value){
    $valueArray[] = $value;
  }
  return $valueArray
}

  
}



}//end class Prray

?>
