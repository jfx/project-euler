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

namespace ProjectEuler\Problem\N004;

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
     * Resolve the problem for 2-digit number.
     *
     * @return int Result
     */
    public function resolve2digit(): int
    {
        $notFound = true;
        $palidrome2d = 0;
        $i = 9;

        while (($i >= 1) && ($notFound)) {
            $j = 9;

            while (($j >= 0) && ($notFound)) {
                $palindrome = 1001 * $i + 110 * $j;
                $x = 99;

                while (($x >= 10) && ($notFound)) {
                    if (($palindrome % $x) == 0) {
                        $y = $palindrome / $x;

                        if (($y < 100) && ($y >= 10)) {
                            $notFound = false;
                            $palidrome2d = $palindrome;
                        } else {
                            // Force exit if
                            $x = 0;
                        }
                    } else {
                        --$x;
                    }
                }
                --$j;
            }
            --$i;
        }

        return $palidrome2d;
    }

    /**
     * Resolve the problem for 3-digit number.
     *
     * @return int Result
     */
    public function resolve3digit(): int
    {
        $notFound = true;
        $palidrome3d = 0;
        $i = 9;

        while (($i >= 1) && ($notFound)) {
            $j = 9;

            while (($j >= 0) && ($notFound)) {
                $k = 9;

                while (($k >= 0) && ($notFound)) {
                    $palindrome = 100001 * $i + 10010 * $j + 1100 * $k;
                    $x = 999;

                    while (($x >= 100) && ($notFound)) {
                        if (($palindrome % $x) == 0) {
                            $y = $palindrome / $x;

                            if (($y < 1000) && ($y >= 100)) {
                                $notFound = false;
                                $palidrome3d = $palindrome;
                            } else {
                                // Force exit if
                                $x = 0;
                            }
                        } else {
                            --$x;
                        }
                    }
                    --$k;
                }
                --$j;
            }
            --$i;
        }

        return $palidrome3d;
    }

    /**
     * Return solution of the problem.
     *
     * @return string Solution of the problem
     */
    protected function resolution(): string
    {
        return ''.$this->resolve3digit();
    }
}
