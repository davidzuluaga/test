<?php

namespace Drupal\Tests\basic_module\Unit;

use Drupal\Tests\UnitTestCase;
use Drupal\basic_module\Model\Calculator;

/**
 *
 * @coversDefaultClass Drupal\basic_module\Model\Calculator
 * @group basic_module
 */
class CalculatorTest extends UnitTestCase {
  
  var $calculator;

  public function setUp() {
    $this->calculator = new Calculator();
  }

  public function tearDown() {
    unset($this->calculator);
  }

  public function testAdd() {
    $number1 = 4;
    $number2 = 4;

    $result = $this->calculator->add($number1, $number2);
    $exepcted = 8;

    $this->assertInternalType('integer', $result, 'El dato retornado no es un entero');
    $this->assertEquals($exepcted, $result, 'El resultado de la suma no es el esperado');
  }

  public function testSubstract() {
    $number1 = 4;
    $number2 = 4;

    $result = $this->calculator->substract($number1, $number2);
    $exepcted = 0;

    $this->assertInternalType('integer', $result, 'El dato retornado no es un entero');
    $this->assertEquals($exepcted, $result, 'El resultado de la suma no es el esperado');
  }

  public function testMuliply() {
    $number1 = 2;
    $number2 = 2;

    $result = $this->calculator->multiply($number1, $number2);
    $exepcted = 4;

    $this->assertInternalType('integer', $result, 'El dato retornado no es un entero');
    $this->assertEquals($exepcted, $result, 'El resultado de la suma no es el esperado');
    
  }
  
//   public function testDivide() {
    
//   }
}