<?php

/**
 * LICENSE : This file is part of Project Euler in PHP.
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

namespace ProjectEuler\Problem\N006;

use ProjectEuler\Problem\AbstractProblem;

/**
 * Project Euler problem class.
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
class Problem extends AbstractProblem
{
    /**
     * Resolve the problem.
     *
     * @param int $integer Integer
     *
     * @return int Result
     */
    public function resolve($integer)
    {
        $sumNatural = 0;
        $sumSquares = 0;

        for ($i = 1; $i <= $integer; ++$i) {
            $sumNatural += $i;
            $sumSquares += $i ** 2;
        }
        $result = ($sumNatural ** 2) - $sumSquares;

        return $result;
    }

    /**
     * Return solution of the problem.
     *
     * @return string Solution of the problem
     */
    public function resolution()
    {
        return ''.$this->resolve(100);
    }
}
