<?php
/**
 * Created by PhpStorm.
 * User: Florian
 * Date: 19/11/2014
 * Time: 17:48
 */

namespace tests\Web1\StringGenerator;

use Web1\StringGenerator\PasswordGenerator;

class PasswordGeneratorTest extends \PHPUnit_Framework_TestCase
{
    public function testGetRandomStringLengthEasy()
    {
        $lenght = mt_rand(1, 10000);
        $password = PasswordGenerator::getRandomString($lenght, PasswordGenerator::PASSWORD_EASY);

        $this->assertEquals($lenght, mb_strlen($password));
    }
    public function testGetRandomStringLengthMedium()
    {
        $lenght = mt_rand(1, 10000);
        $password = PasswordGenerator::getRandomString($lenght, PasswordGenerator::PASSWORD_MEDIUM);

        $this->assertEquals($lenght, mb_strlen($password));
    }
    public function testGetRandomStringLengthHard()
    {
        $lenght = mt_rand(1, 10000);
        $password = PasswordGenerator::getRandomString($lenght, PasswordGenerator::PASSWORD_HARD);

        $this->assertEquals($lenght, mb_strlen($password));
    }

    public function testGetRandomStringNotEmpty()
    {
        $password = PasswordGenerator::getRandomString(0);

        $this->assertNotEmpty($password);
    }
} 