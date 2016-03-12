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

namespace ProjectEuler\Problem;

/**
 * Project Euler problem abstract class.
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
class ProblemFactory
{
    /**
     * Get the Problem object by its id.
     *
     * @param int $num $id of the problem
     *
     * @return Problem
     */
    public static function get($num)
    {
        if (strlen($num) == 1) {
            $num = '00'.$num;
        } elseif (strlen($num) == 2) {
            $num = '0'.$num;
        }

        $className = '\ProjectEuler\Problem\N'.$num.'\Problem';

        if (class_exists($className)) {
            $pb = new $className();
        } else {
            $pb = false;
        }

        return $pb;
    }
}
