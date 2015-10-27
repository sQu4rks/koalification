<?php
  class QueryFilterTest extends PHPUnit_Framework_TestCase {

    function testCreationWithoutTable()
    {
      $oF = new OrderFilter("userId","DESC");
      $this->assertEquals("userId DESC",$oF->getQueryString());
    }

    function testCreationWithTable()
    {
      $oF = new OrderFilter("userId", "DESC");
      $this->assertEquals("User.userId DESC", $oF->getQueryString("User"));
    }
  }

 ?>
