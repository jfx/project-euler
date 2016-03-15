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

namespace ProjectEuler\Problem\N005;

use ProjectEuler\Problem\AbstractProblem;
use ProjectEuler\Util\Prime;

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
        $primeObj = new Prime($integer + 2);

        $primeFactorList = array();

        for ($i = 2; $i <= $integer; ++$i) {
            $primesFactor = $primeObj->getPrimesFactor($i);

            $primeFactorOccurence = array_count_values($primesFactor);

            foreach ($primeFactorOccurence as $prime => $occurence) {
                if (!((array_key_exists($prime, $primeFactorList))
                    && ($occurence <= $primeFactorList[$prime]))) {
                    $primeFactorList[$prime] = $occurence;
                }
            }
        }
        $result = 1;
        foreach ($primeFactorList as $num => $occurence) {
            $result *= $num ** $occurence;
        }

        return $result;
    }

    /**
     * Return solution of the problem.
     *
     * @return string Solution of the problem
     */
    protected function resolution(): string
    {
        return ''.$this->resolve(20);
    }
}
