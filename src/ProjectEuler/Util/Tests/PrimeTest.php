<?php

/**
 * LICENSE : This file is part of My Agile Product.
 *
 * My Agile Product is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * My Agile Product is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
declare (strict_types = 1);

namespace ProjectEuler\Util\Tests;

use ProjectEuler\Util\Prime;

/**
 * Test Project Euler problem class.
 *
 * @category  Project Euler in PHP
 *
 * @author    Francois-Xavier Soubirou <soubirou@yahoo.fr>
 * @copyright 2016 Francois-Xavier Soubirou
 * @license   http://www.gnu.org/licenses/   GPLv3
 *
 * @link      https://projecteuler.net/
 * @since     1
 */
class PrimeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test method.
     */
    public function testPrimesList()
    {
        $prime = new Prime();

        $this->assertEquals(
            array(2, 3, 5, 7, 11, 13, 17, 19, 23, 29),
            $prime->getPrimesList(30)
        );
    }

    /**
     * Test method.
     */
    public function testPrimesFactor1()
    {
        $prime = new Prime();

        $this->assertEquals(
            array(),
            $prime->getPrimesFactor(1)
        );
    }

    /**
     * Test method.
     */
    public function testPrimesFactor2()
    {
        $prime = new Prime();

        $this->assertEquals(
            array(2),
            $prime->getPrimesFactor(2)
        );
    }

    /**
     * Test method.
     */
    public function testPrimesFactor3()
    {
        $prime = new Prime();

        $this->assertEquals(
            array(3),
            $prime->getPrimesFactor(3)
        );
    }

    /**
     * Test method.
     */
    public function testPrimesFactor10()
    {
        $prime = new Prime();

        $this->assertEquals(
            array(2, 5),
            $prime->getPrimesFactor(10)
        );
    }

    /**
     * Test method.
     */
    public function testPrimesFactor12()
    {
        $prime = new Prime();

        $this->assertEquals(
            array(2, 2, 3),
            $prime->getPrimesFactor(12)
        );
    }

    /**
     * Test method.
     */
    public function testPrimesFactor13195()
    {
        $prime = new Prime();

        $this->assertEquals(
            array(5, 7, 13, 29),
            $prime->getPrimesFactor(13195)
        );
    }

    /**
     * Test method.
     */
    public function testPrimesFactorOnlimit()
    {
        $prime = new Prime();
        $prime->setDefaultLimit(29);

        $this->assertEquals(
            array(5, 7, 13, 29),
            $prime->getPrimesFactor(13195)
        );
    }

    /**
     * Test method.
     */
    public function testPrimesFactorWithLimitUpdated()
    {
        $prime = new Prime();
        $prime->setDefaultLimit(10);

        $this->assertEquals(
            array(5, 7, 13, 29),
            $prime->getPrimesFactor(13195)
        );
    }

    /**
     * Test method.
     */
    public function testOccurencePrime1()
    {
        $prime = new Prime();

        $this->assertEquals(2, $prime->getOccurencePrime(1));
    }

    /**
     * Test method.
     */
    public function testOccurencePrime6()
    {
        $prime = new Prime();

        $this->assertEquals(13, $prime->getOccurencePrime(6));
    }

    /**
     * Test method.
     */
    public function testOccurencePrime10001()
    {
        $prime = new Prime();

        $this->assertEquals(104743, $prime->getOccurencePrime(10001));
    }
}
