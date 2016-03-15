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
declare (strict_types = 1);

namespace ProjectEuler\Problem\N002;

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
     * @param int $max Maximum
     *
     * @return int Result
     */
    public function resolve(int $max): int
    {
        $a = 1;
        $b = 2;
        $c = $a + $b;
        $sum = 2;

        while ($c <= $max) {
            if (($c % 2) == 0) {
                $sum += $c;
            }
            $a = $b;
            $b = $c;
            $c = $a + $b;
        }

        return $sum;
    }

    /**
     * Return solution of the problem.
     *
     * @return string Solution of the problem
     */
    protected function resolution(): string
    {
        return ''.$this->resolve(4000000);
    }
}
