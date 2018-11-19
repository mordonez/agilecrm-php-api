<?php
use PHPUnit\Framework\TestCase;

/**
 *  Corresponding Class to test AgileCrm class
 */
class AgileCrmTest extends TestCase
{

    public function testIsThereAnySyntaxError()
    {
        $var = new AgileCRM\AgileCRM;
        $this->assertTrue(is_object($var));
        unset($var);
    }
}
