<?php
/*
 * $Id: QueryFilter.class.php 108 2015-10-16 07:16:58Z Marcel $
 */
 class QueryFilter {
   private $key;
   private $value;
   private $operator;

   function __construct($key, $value, $operator) {
     $this->key = $key;
     $this->value = $value;
     $this->operator = $operator;
   }

   function getQueryString($table="") {
     if($table != "") {
       $table = $table.".";
     }
     return $table.$this->key . $this->operator . "?";
   }

   function getValue() {
     return $this->value;
   }

 }
 ?>
