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

namespace ProjectEuler\Problem\N002\Tests;

use ProjectEuler\Problem\N002\Problem;
use ProjectEuler\Problem\Tests\AbstractProblemTest;

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
class ProblemTest extends AbstractProblemTest
{
    /**
     * Get the problem to test.
     *
     * @return Problem The problem
     */
    public function getProblem()
    {
        return new Problem();
    }

    /**
     * Test method.
     */
    public function testGetId()
    {
        $pb = new Problem();

        $this->assertEquals('002', $pb->getId());
    }

    /**
     * Test method.
     */
    public function testResolveFor10()
    {
        $pb = new Problem();

        $this->assertEquals(10, $pb->resolve(10));
    }

    /**
     * Test method.
     */
    public function testResolveFor100()
    {
        $pb = new Problem();

        $this->assertEquals(44, $pb->resolve(100));
    }

    /**
     * Test method.
     */
    public function testGetSolution()
    {
        $pb = new Problem();

        $this->assertEquals(4613732, $pb->getSolution());
    }
}
