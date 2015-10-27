<?php
/*
 * $Id: OrderFilter.class.php 108 2015-10-16 07:16:58Z Marcel $
 */
 class OrderFilter {
   private $by;
   private $type;

   function __construct($by, $type) {
      $this->by = $by;
      $this->type = $type;
   }

   function getQueryString($table="") {
     if($table != "") {
       $table = $table.".";
     }
     return $table.$this->by . " ". $this->type;
   }

 }
 ?>
