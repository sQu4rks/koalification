<?php
  class QueryFilterTest extends PHPUnit_Framework_TestCase
  {
    public function testCreation()
    {
      $qF = new QueryFilter("userId","4","=");
      $this->assertEquals("userId=?",$qF->getQueryString());
    }
  }
?>
