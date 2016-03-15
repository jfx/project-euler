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

namespace ProjectEuler\Problem\Tests;

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
abstract class AbstractProblemTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Get the problem to test.
     *
     * @return Problem The problem
     */
    abstract public function getProblem();

    /**
     * Test method.
     */
    public function testGetTime()
    {
        $pb = $this->getProblem();

        $this->assertGreaterThanOrEqual(0, $pb->getTime());
    }

    /**
     * Test method.
     */
    public function testGetRoundTime()
    {
        $pb = $this->getProblem();

        $this->assertGreaterThanOrEqual(0, $pb->getRoundTime());
    }
}
