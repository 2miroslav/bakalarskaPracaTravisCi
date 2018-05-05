<?php
/**
 * Created by PhpStorm.
 * User: mrandlisek
 * Date: 4. 5. 2018
 * Time: 13:12
 */

use PHPUnit\Framework\TestCase;
class calculatorTest extends TestCase{
    public $calculator;
    public function setUp(){
        $this->calculator= new BakalarskaPraca\PHPUnit\Controler\Calculator\Calculator();
    }
    public function testCalc(){

        $this->assertEquals(5, $this->calculator->calc(3,2));
    }
}