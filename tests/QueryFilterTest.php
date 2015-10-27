<?php
  class QueryFilterTest extends PHPUnit_Framework_TestCase
  {
    public function testCreationWithoutTable()
    {
      $qF = new QueryFilter("userId","4","=");
      $this->assertEquals("userId=?",$qF->getQueryString());
    }

    public function testCreationWithTable()
    {
      $qF = new QueryFilter("userId","4","=");
      $this->assertEquals("User.userId=?",$qF->getQueryString("User"));
    }

    public function testGetValue()
    {
      $qF = new QueryFilter("userId","4","=");
      $this->assertEquals("4","4");
    }
  }
?>
