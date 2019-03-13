<?php

use PHPUnit\Framework\TestCase;
use App\Models\ExampleClass;

class ExampleTest extends TestCase {
  public function testFreteGratis(){
    $example = new ExampleClass();
    $this->assertEquals($example->methodExample(), "Inicial project");
  }
}
